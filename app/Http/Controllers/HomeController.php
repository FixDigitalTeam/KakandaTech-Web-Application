<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() 
    {
        return view('pages.frontend.landing-home', [
            'pagetitle' => 'Kakanda Tech - Digital IT Agency Profesional, Berkualitas, dan Terpercaya',
        ]);
    }

}
