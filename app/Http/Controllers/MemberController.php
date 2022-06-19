<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\MemberRequest;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
        return DataTables::of(Transaction::with(['package', 'user'])->where('user_id', Auth::user()->id)->get())
        ->addColumn('action', function($mytransaction) {
            return '
            <a class="btn btn-info" href="'. route('dashboard.mytransaction.show', $mytransaction->id_transaction) .'">
                <i class="fa-solid fa-eye"></i> Detail
            </a>
            ';
        })
        ->rawColumns(['action'])
        ->make();
        }
        return view('pages.backend.member.index', [
            'head' => 'My Transaction',
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reviews(Request $request)
    {
        $getidtrx = $request->input('id_transaction');
        if ($request->review == 'jangkrik' || $request->review == 'jelek' || $request->review == 'bodoh' || $request->review == 'tolol') {
            echo '<h1>Ndak boleh itu</h1>';
            return redirect()->route('dashboard.mytransaction.show', $getidtrx)->with('error', 'Gagal menambah review karena mengandung kata-kata yang tidak diperbolehkan!!!');
        }
        else {
            Review::insert([
                'id_transaction' => $request->id_transaction,
                'rate' => $request->rate,
                'review' => $request->review
            ]);
        }
        DB::table('transactions')->where('id_transaction', $getidtrx)->update(['token_review' => 0]);
        return redirect()->route('dashboard.mytransaction.show', $getidtrx);
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
    public function show(Transaction $mytransaction)
    {
        return view('pages.backend.member.view', [
            'head' => 'My Transaction',
            'mytransaction' => $mytransaction
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MemberRequest $request, Transaction $mytransaction)
    {
        $data = $request->all();
        $mytransaction->update($data);
        return redirect()->route('dashboard.mytransaction.index')->with('success', 'User Update Successfully');
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
