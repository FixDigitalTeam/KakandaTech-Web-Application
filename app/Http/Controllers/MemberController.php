<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function mytransaction() 
    {
        return view('pages.backend.member.mytransaction', [
            'head' => 'My Transaction'
        ]);
    }
}
