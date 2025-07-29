<?php

namespace App\Http\Controllers;

use App\Mail\UserMail;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    // Lưu thanh toán khi lên xe
    public function save(string $amount, $method)
    {

        $payment = Payment::create([
            "amount" => $amount,
            "method" => $method
        ]);

        return response()->json($payment);
    }

    // Lưu thanh toán thông qua vnpay
    public function store($amount, $ipaddr)
    {
        //
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('vnpay.callback');
        $vnp_TmnCode = "J7EZUWZ1"; //Mã website tại VNPAY 
        $vnp_HashSecret = "2GT1GOM5TWXFHD5ZSA813GY01XVV7R4E"; //Chuỗi bí mật

        $vnp_TxnRef = time(); // Mã giao dịch là thời gian hiện tại
        $vnp_OrderInfo = 'Thanh toán đặt vé xe DUANGY'; // Nội dung chuyển khoản
        $vnp_OrderType = 'Bus Ticket'; // Danh mục hàng hóa
        $vnp_Amount = $amount * 100; // Số tiền cần thanh toán
        $vnp_Locale = 'vn'; // Ngôn ngữ hiển thị trên giao diện
        $vnp_BankCode = 'VNBANK'; // Phương thức thanh toán bằng tài khoản ngân hàng
        $vnp_IpAddr = $ipaddr; // Địa chỉ ip của khách hàng thực hiện giao dịch
        // $desc = $data['desc']; // Địa chỉ ip của khách hàng thực hiện giao dịch

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            // "desc" => $desc,

        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";

        foreach ($inputData as $key => $value) {

            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        $returnData = array(
            'code' => '00',
            'message' => 'success',
            'data' => $vnp_Url
        );

        return response()->json($returnData);
    }

    public function callback(Request $request)
    {
        $data = $request->all();

        if ($data["vnp_ResponseCode"] == "00") {

            // Lưu dữ liệu vào database
            // $vnp_Amount = $data["vnp_Amount"];
            // $vnp_BankCode = $data["vnp_BankCode"];
            // $vnp_BankTranNo = $data["vnp_BankTranNo"];
            // $vnp_CardType = $data["vnp_CardType"];
            // $vnp_OrderInfo = $data["vnp_OrderInfo"];
            // $vnp_PayDate = $data["vnp_PayDate"];
            // $vnp_ResponseCode = $data["vnp_ResponseCode"];
            // $vnp_TmnCode = $data["vnp_TmnCode"];
            // $vnp_TransactionNo = $data["vnp_TransactionNo"];
            // $vnp_TransactionStatus = $data["vnp_TransactionStatus"];
            // $vnp_TxnRef = $data["vnp_TxnRef"];
            // $vnp_SecureHash = $data["vnp_SecureHash"];

            $payment = Payment::create([
                "amount" => $data["vnp_Amount"],
                "method" => "VNPay"
            ]);

            if ($payment) {

                $payment_id = $payment->id;

                if (session()->get('ticket')) {

                    $trip_details = session()->get('ticket');
                }

                if (session()->get('user')) {

                    $user = session()->get('user');

                    $user_phone = $user->phone ?? null;
                }

                $ticketController = new TicketController();
                $seatController = new SeatController();

                // Thêm dữ liệu vào vé
                foreach ($trip_details["seat_id"] as $key => $seat_id) {

                    $ticketController->store($trip_details["name"], $trip_details["phone"], $user_phone ?? null, $trip_details["trip"]["id"], $trip_details["pickup"]["id"], $trip_details["dropoff"]["id"], $seat_id, "pending", "", $trip_details["seat_list"][$key], $payment_id);
                    $seatController->update($seat_id, true);
                }

                // Cập nhật ghế đã đặt
                
                // foreach ($trip_details->seat_id as $seat) {

                // }
            }

            // $url = 'http://localhost:8000/success' . '?query=' . $payment['vnp_TxnRef'];

            // return view('payment-success');
            Mail::to($trip_details["email"])->send(new UserMail($trip_details));

            return redirect('/payments?query=success');
        } else {

            // $url = 'http://localhost:8000/error';

            return redirect('/payments?query=error');
        }
    }
}
