<?php

namespace App\Http\Controllers\API;

use Midtrans\Config;
use Midtrans\Notification;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MidtransController extends Controller
{
    public function callback() {
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        $notification = new Notification();

        $status = $notification->transaction_status;
        $type = $notification->payment_type;
        $fraud = $notification->fraud_status;
        $order_id = $notification->order_id;

        $order = explode('-', $order_id);

        $transaction = Transaction::findOrFail($order[1]);

        // Handle notification status midtrans
        if($status == 'capture') {
            if($type == 'credit_card') {
                if($fraud == 'challenge') {
                    $transaction->payment_status = 'Pending';
                } else {
                    $transaction->payment_status = 'Success';
                }
            }
        }

        else if($status == 'settlement') {
            $transaction->payment_status = 'Success';
        }

        else if($status == 'pending') {
            $transaction->payment_status = 'Pending';
        }

        else if($status == 'deny') {
            $transaction->payment_status = 'Pending';
        }

        else if($status == 'expire') {
            $transaction->payment_status = 'Expire';
        }

         else if($status == 'cancel') {
            $transaction->payment_status = 'Cancelled';
        }

        $transaction->save();
        
        return response()->json([
            'meta' => [
                'code' => 200,
                'message' => 'Midtrans Notification Success!'
            ]
        ]);
    } 
}
