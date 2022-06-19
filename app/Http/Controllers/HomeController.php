<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home() 
    {
        $datareview = DB::table('reviews')->select('*')->join('transactions', 'transactions.id_transaction', '=', 'reviews.id_transaction')->join('users', 'users.id', '=', 'transactions.user_id')->join('packages', 'packages.id_package', '=', 'transactions.id_package')->join('products', 'products.id_product', '=', 'packages.id_product')->get();
        return view('pages.frontend.landing-home', [
            'pagetitle' => 'Kakanda Tech - Digital IT Agency Profesional, Berkualitas, dan Terpercaya',
            'datareview' => $datareview
        ]);
    }

}
