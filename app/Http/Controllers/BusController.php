<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bus = Bus::with('seat_types')->get();
        return response()->json($bus);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($bus_id,  $content,  $replacement_bus, string $status)
    {
        //
        $bus = Bus::find($bus_id);

        if ($bus) {
            $bus->status = $status;
            $bus->status_detail = $content;
            $bus->replacement_bus = $replacement_bus;

            $bus->save();

            return response()->json(["code" => 1, "message" => "Cập nhật thành công"]);
        }

        return response()->json(["code" => 0, "message" => "Cập nhật thất bại"]);
    }

    // public function getEmailByBusId($busId)
    // {
    //     $bus = Bus::find($busId)
    //         // ->where('status', 'broken')
    //         ->first();

    //     if (!$bus) {
    //         return response()->json(['message' => 'Bus not found or not broken'], 404);
    //     }

    //     $userPhones = $bus->trips()
    //         ->with('tickets.user')
    //         ->get()
    //         // ->flatMap(function ($trip) {
    //         //     return $trip->tickets->pluck('user_phone');
    //         // })
    //         ->flatMap(function ($trip) {
    //             return $trip->tickets->map(function ($ticket) {
    //                 return optional($ticket->user)->email;
    //             });
    //         })
    //         ->unique()
    //         ->values();

    //     return response()->json($userPhones);
    // }
    // public function getEmailByBusId($busId)
    // {
    //     $bus = Bus::find($busId);

    //     if (!$bus) {
    //         return response()->json(['message' => 'Bus not found'], 404);
    //     }

    //     // Lấy tất cả trips của bus, kèm theo tickets và user
    //     // $trips = $bus->trips()->with('tickets.user')->get();
    //     $trips = $bus->trips()
    //         ->with(['tickets' => function ($query) {
    //             $query->where('status', 'pending');
    //         }, 'tickets.user'])
    //         ->get();


    //     $emailsWithTickets = [];

    //     foreach ($trips as $trip) {

    //         foreach ($trip->tickets as $ticket) {
    //             $user = $ticket->user;
    //             if ($user && $user->email) {
    //                 $email = $user->email;
    //                 if (!isset($emailsWithTickets[$email])) {
    //                     $emailsWithTickets[$email] = [];
    //                 }
    //                 $emailsWithTickets[$email][] = $ticket->id;
    //             }
    //         }
    //     }

    //     return response()->json($emailsWithTickets);
    // }
    public function getEmailByBusId($busId)
    {
        $bus = Bus::find($busId);


        if (!$bus) {
            return response()->json(['message' => 'Bus not found'], 404);
        }

        // Lấy các chuyến đi kèm vé có trạng thái pending và người dùng
        $trips = $bus->trips()
            ->with(['tickets' => function ($query) {
                $query->where('status', 'pending');
            }, 'tickets.user', 'tickets.pickup', 'tickets.dropoff'])
            ->get();

        // dd($trips->toArray());

        $emailsWithTrips = [];

        foreach ($trips as $trip) {
            foreach ($trip->tickets as $ticket) {
                $user = $ticket->user;
                if ($user && $user->email) {
                    $email = $user->email;

                    // dd($ticket->toArray());

                    // Chuyển trip thành mảng (nếu cần), hoặc chỉ chọn vài trường cụ thể
                    $tripInfo = [
                        'id' => $ticket->id,
                        'from' => $trip->from,
                        // 'to' => $trip->to,
                        // 'start_time' => $trip->start_time,
                        // 'end_time' => $trip->end_time,
                        // thêm thông tin khác nếu cần
                    ];

                    if (!isset($emailsWithTrips[$email])) {
                        $emailsWithTrips[$email] = [];
                    }

                    // Tránh lặp lại cùng chuyến
                    if (!in_array($ticket->toArray(), $emailsWithTrips[$email])) {
                        $emailsWithTrips[$email][] = $ticket->toArray();
                    }
                }
            }
        }


        return response()->json($emailsWithTrips);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
