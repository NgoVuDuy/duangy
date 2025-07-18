<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //
    public function getTicketByPhone($phone)
    {

        $tickets = Ticket::with('user')
            ->with('trip.route')
            ->with('pickup')
            ->with('dropoff')
            ->with('seat')
            ->where('phone', $phone)
            ->get();
        return response()->json($tickets);
    }

    public function getTicketById($phone)
    {

        $tickets = Ticket::with('user')
            ->with('trip.route')
            ->with('trip.bus')
            ->with('trip.bus.busOperator')
            ->with('pickup')
            ->with('dropoff')
            ->with('seat')
            ->with('payment')
            ->where('user_phone', $phone)
            ->orderBy('created_at', 'desc')
            ->get();
        return response()->json($tickets);
    }

    public function store(string $name, string $phone, $user_phone, $trip_id,  $pickup,  $dropoff, $seat_id, string $status, string $method, string $price, string $payment_id)
    {

        $ticket = new Ticket();
        $ticket->name = $name;
        $ticket->phone = $phone;
        $ticket->user_phone = $user_phone;
        $ticket->trip_id = $trip_id;
        $ticket->pickup = $pickup;
        $ticket->dropoff = $dropoff;
        $ticket->seat_id = $seat_id;
        $ticket->status = $status;
        $ticket->method = $method;
        $ticket->price = $price;
        $ticket->payment_id = $payment_id;

        $ticket->save();
    }
    // Cập nhật trạng thái
    public function updateStatus(int $ticket_id, string $new_status)
    {
        $ticket = Ticket::find($ticket_id);

        if (!$ticket) {
            return response()->json(['message' => 'Không tìm thấy vé.'], 404);
        }

        $ticket->status = $new_status;
        $ticket->save();

        return response()->json([
            'message' => 'Cập nhật trạng thái thành công.',
            'ticket_id' => $ticket->id,
            'new_status' => $new_status
        ]);
    }


    public function updateExpiredTickets($userPhone)
    {

        $tickets = Ticket::with('user')
            ->with('trip.route')
            ->with('trip.bus')
            ->with('trip.bus.busOperator')
            ->with('pickup')
            ->with('dropoff')
            ->with('seat')
            ->where('user_phone', $userPhone)
            ->orderBy('created_at', 'desc')
            ->get();

        $updatedCount = 0;

        foreach ($tickets as $ticket) {

            $departureTime = Carbon::parse($ticket->trip->departure_date);

            if ($ticket->status !== 'cancelled' && $departureTime->lt(now())) {
                $ticket->status = 'done';
                $ticket->save();
                $updatedCount++;
            }
        }

        return response()->json([
            'message' => "Cập nhật trạng thái thành công.",
            'updated' => $updatedCount
        ]);
    }


    // Hàm hủy vé xe
    public function cancel($id)
    {
        // $ticket = Ticket::findOrFail($id);
        $ticket = Ticket::with('payment')
        ->with('trip')
        ->findOrFail($id);

        // dd($ticket->toArray());

        if ($ticket->status === 'cancelled') {

            return response()->json([
                'code' => -1,
                'message' => 'Vé đã được hủy trước đó.',

            ], 400);
        }

        // 

        $today = Carbon::now()->startOfDay(); // Thời gian hiện tại
        $departureDate = Carbon::parse($ticket->trip->departure_date)->startOfDay(); // Thời gian khởi hành của xe

        $daysBeforeDeparture = $today->diffInDays($departureDate, false); // false => tính luôn âm

        $daysBeforeDeparture = (int) $daysBeforeDeparture;

        // Nếu là thanh toán khi lên xe: không thể hủy nếu trễ hơn 2 ngày
        if ($ticket->payment->method == "COD") {

            if ($daysBeforeDeparture >= 2) { // Có thể hủy  
                
                $ticket->status = 'cancelled';
                $ticket->save();

                return response()->json([

                    'code' => 1,
                    'message' => 'Hủy vé thành công.',

                ]);
            } else {

                return response()->json([

                    'code' => 0,
                    'message' => 'Vé đã quá hạn để hủy.',

                ]);
            }
        } else {


            $refundPercent = 0; // Phần trăm hoàn tiền

            if ($daysBeforeDeparture >= 3) {

                $refundPercent = 100;
            } elseif ($daysBeforeDeparture === 2) {

                $refundPercent = 70;
            } elseif ($daysBeforeDeparture === 1) {

                $refundPercent = 50;

            } elseif ($daysBeforeDeparture <= 0) {

                $refundPercent = 0;
            }

            $refundAmount = str_replace('.', '',  $ticket->price) * ($refundPercent / 100);

            $ticket->refund_amount = number_format($refundAmount, 0, ',', '.');
            // Gọi API hoàn tiền nếu cần (VD: VNPay, Momo...)

            $ticket->status = 'cancelled';
            $ticket->save();

            return response()->json([
                'code' => 2,
                'message' => 'Hủy vé thành công.',
                // 'refund' => $refundAmount,
                // 'refund_percent' => $refundPercent . '%'
            ]);
        }
    }
}
