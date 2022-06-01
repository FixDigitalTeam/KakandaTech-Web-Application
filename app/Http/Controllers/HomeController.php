<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function web() 
    {
        $items = Package::with(['product'])->where('id_product', 1)->get();
        return view('pages.frontend.home', [
            'title' => 'Website',
            'items' => $items
        ]);
    }

}
