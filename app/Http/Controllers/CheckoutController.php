<?php

namespace App\Http\Controllers;

use Exception;
use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Package;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CheckoutRequest;

class CheckoutController extends Controller
{
    public function verification(Request $request, $id)
    {
        $package = Package::findOrFail($id);
        return view('pages.frontend.checkout', [
            'title' => 'Verification',
        ], compact('package'));
    }

    public function checkout(CheckoutRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id; 

        $transaction = Transaction::with(['package', 'user'])->create($data);
        // Konfigurasi Midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        // Setup variable midtrans
        $midtrans = [
            'transaction_details' => [
                'order_id' => 'TRX-' . $transaction->id_transaction,
                'gross_amount' => (int) $transaction->payment_total,
            ],
            'customer_details' => [
                'first_name' => $transaction->user->name,
                'email' => $transaction->user->email,
            ],
            'enabled_payments' => ['bank_transfer'],
            'vtweb' => []
        ];
        // Payment process
        try {
            // Get Snap Payment Page URL
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;
            
            $transaction->payment_url = $paymentUrl;
            $transaction->save();

            // Redirect to Snap Payment Page
            return redirect($paymentUrl);
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
}
