<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\TransactionRequest;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
        return DataTables::of(Transaction::with(['package', 'user'])->get())
        ->addColumn('action', function($transaction) {
            return '
            <a class="btn btn-info" href="'. route('dashboard.transaction.show', $transaction->id_transaction) .'">
                <i class="fa-solid fa-eye"></i>
            </a>
            <a class="btn btn-warning" href="'. route('dashboard.transaction.edit', $transaction->id_transaction) .'">
                <i class="fa-solid fa-pencil"></i>
            </a>
            ';
        })
        ->rawColumns(['action'])
        ->make();
        }
        return view('pages.backend.transaction.index', [
            'head' => 'Transaction'
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
    public function show(Transaction $transaction)
    {
        return view('pages.backend.transaction.view', [
            'head' => 'View Transaction',
            'transaction' => $transaction
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        return view('pages.backend.transaction.edit', [
            'head' => 'Edit Transaction',
            'transaction' => $transaction
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransactionRequest $request, Transaction $transaction)
    {
        $data = $request->all();
        $transaction->update($data);
        return redirect()->route('dashboard.transaction.index')->with('success', 'User Update Successfully');
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
