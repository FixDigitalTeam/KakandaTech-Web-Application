<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $customer = User::count();
        $transaction_pending = Transaction::where('payment_status', 'Pending')->count();
        $transaction_success = Transaction::where('payment_status', 'Success')->count();
        $working_progress = Transaction::where('working_status', 'On Working')->count();
        

        return view('pages.backend.dashboard.dashboard',[
            'head' => 'Dashboard',
            'customer' => $customer,
            'transaction_success' => $transaction_success,
            'transaction_pending' => $transaction_pending,
            'working_progress' => $working_progress
        ]);
    }
}
