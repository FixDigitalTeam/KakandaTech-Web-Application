<?php

namespace App\Http\Controllers\API;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function all(Request $request)
    {
        $id_transaction = $request->input('id_transaction');
        $limit = $request->input('limit', 6);
        $payment_status = $request->input('payment_status');
        $id_product = $request->input('id_product');


        if($id_transaction)
        {
            $transaction = Transaction::with(['package', 'user'])->find($id_transaction);

            if($transaction)
            {
                return ResponseFormatter::success(
                    $transaction,
                    'Data transaksi berhasil diambil'
                );
            }
            else
            {
                return ResponseFormatter::error(
                    null,
                    'Data transaksi tidak ada',
                    404
                );
            }
        }

        $transaction = Transaction::with(['package', 'user'])->where('user_id', Auth::user()->id);

        if($id_product)
        {
            $transaction->where('id_product', $id_product);    
        }

        if($payment_status)
        {
            $transaction->where('payment_status', $payment_status);
        }

        return ResponseFormatter::success(

            $transaction->paginate($limit),
            'Data list transaksi berhasil diambil'
        );
    }
}
