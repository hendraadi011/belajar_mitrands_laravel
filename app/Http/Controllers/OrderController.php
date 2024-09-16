<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function checkout(Request $request)
    {
        $order = [
            'name' => $request->name,
            'phone' => $request->phone,
            'qty' => $request->qty,
            'address' => $request->address,
            'total_price' => $request->qty * 20000,
            'status' => 'Unpaid'
        ];
        $data = Order::create($order);

        if ($data) {

            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = config('mitrands.server_key');
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;

            $params = array(
                'transaction_details' => array(
                    'order_id' => $data->id,
                    'gross_amount' => $data->total_price,
                ),
                'customer_details' => array(
                    'first_name' => $request->name,
                    'phone' => $request->phone,
                ),
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);
            return view('checkout', compact('snapToken', 'data'));
        }

        return 'gagal';
    }

    public function callback(Request $request)
    {
        $serverKey = config('mitrands.merchant_id');

        $hashed = hash("sha512", $request->order_id, $request->status_code, $request->gross_amount, $serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture') {
                $order = Order::find($request->order_id);
                $order->update(['status', 'Paid']);
            }
        }
    }
}
