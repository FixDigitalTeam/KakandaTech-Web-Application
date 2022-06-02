<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function seocontent()
    {
        $pagetitle = "SEO Content";
        $data = DB::table('packages')->select('*')->where('id_product', 1)->get();
        $maxtrx = DB::table('transaction')->select('*')->where('payment_status', 'Success')->where('working_status', 'On Working')->count();
        return view('pages.landing-pages.seo-content', compact(
            'pagetitle', 'data', 'maxtrx'
        ));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function webdevelopment()
    {
        $pagetitle = "Website Development";
        $data = DB::table('packages')->select('*')->where('id_product', 2)->get();
        return view('pages.landing-pages.web-development', compact('pagetitle', 'data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mobiledevelopment()
    {
        $pagetitle = "Mobile Development";
        $data = DB::table('packages')->select('*')->where('id_product', 3)->get();
        return view('pages.landing-pages.mobile-development', compact('pagetitle', 'data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function transaction()
    {
        $pagetitle = "Verification Transaction";
        return view('pages.landing-pages.transaction', compact('pagetitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
