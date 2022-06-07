<?php

namespace App\Http\Controllers;

use Exception;
use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Package;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CheckoutRequest;

class CheckoutController extends Controller
{
    public function verification(Request $request, $slug)
    {
        $package = Package::with(['product'])->where('slug', $slug)->firstOrFail();
        $currentdate = Carbon::now();
        return view('pages.frontend.checkout', [
            'title' => 'Verifikasi Pesanan Anda',
            'pagetitle' => 'Verifikasi Transaksi'
        ], compact('package', 'currentdate'));
    }

    public function checkout(CheckoutRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        $transaction = Transaction::with(['package', 'user'])->create($data);
        
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        $midtrans = [
            'transaction_details' => [
                'order_id' => 'TEST-' . $transaction->id_transaction,
                'gross_amount' => (int) $transaction->payment_total,
            ],
            'customer_details' => [
                'first_name' => $transaction->user->name,
                'email' => $transaction->user->email,
            ],
            'enabled_payments' => ['bank_transfer'],
            'vtweb' => []
        ];

        try {
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;
            
            $transaction->payment_url = $paymentUrl;
            $transaction->save();

            return redirect($paymentUrl);
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
