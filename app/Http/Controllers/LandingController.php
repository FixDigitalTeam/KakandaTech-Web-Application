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
        $maxtrx = DB::table('transactions')->select('*')->where('payment_status', 'Success')->where('working_status', 'On Working')->count();
        $getdeadline = DB::table('transactions')->where('payment_status', 'Success')->where('working_status', 'On Working')->orderBy('deadline', 'asc')->limit(1)->get();
        return view('pages.frontend.seo-content', compact(
            'pagetitle', 'data', 'maxtrx', 'getdeadline'
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
        $data = DB::table('packages')->select('*')->where('id_product', 2)->get();$maxtrx = DB::table('transactions')->select('*')->where('payment_status', 'Success')->where('working_status', 'On Working')->count();
        $getdeadline = DB::table('transactions')->where('payment_status', 'Success')->where('working_status', 'On Working')->orderBy('deadline', 'asc')->limit(1)->get();
        return view('pages.frontend.web-development', compact(
            'pagetitle', 'data', 'maxtrx', 'getdeadline'
        ));
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
        $maxtrx = DB::table('transactions')->select('*')->where('payment_status', 'Success')->where('working_status', 'On Working')->count();
        $getdeadline = DB::table('transactions')->where('payment_status', 'Success')->where('working_status', 'On Working')->orderBy('deadline', 'asc')->limit(1)->get();
        return view('pages.frontend.mobile-development', compact(
            'pagetitle', 'data', 'maxtrx', 'getdeadline'
        ));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function transaction()
    {
        $pagetitle = "Verification Transaction";
        return view('pages.frontend.trx-verify', compact('pagetitle'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        $data = DB::table('blogs')->select('*')->get();
        $pagetitle = "Blog Data";
        return view('pages.frontend.blog-data', compact('data', 'pagetitle'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blogdetail(Request $request, $slug)
    {
        $blogdetail = DB::table('blogs')->select('*')->where('slug', $slug)->get();
        $popularpost = DB::table('blogs')->select('*')->limit(4)->get();
        $releatedpost = DB::table('blogs')->select('*')->limit(2)->get();
        return view('pages.frontend.article-detail', [
            'pagetitle' => 'Blog Details',
        ], compact('blogdetail', 'popularpost', 'releatedpost'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendmessage(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('msg_subject');
        $message = $request->input('message');
        $sendto = 'https://wa.me/6282140382483?text=';
        $titlemessage = '*Hallo, Kakanda Tech!* %0A%0A';
        $finalmessage = $sendto . $titlemessage . '*Pesan dari : ' . $name . '*; %0A' . '*Email : ' . $email . '*; %0A' . '*Subjek : ' . $subject . '*; %0A%0A' . '*Pesan :* %0A' . str_replace(' ', '%20', $message);

        return redirect($finalmessage);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactus()
    {
        return view('pages.frontend.contact-us', [
            'pagetitle' => 'Contact Us',
        ]);
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
