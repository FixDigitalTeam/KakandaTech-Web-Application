<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
        return DataTables::of(User::query())
        ->addColumn('action', function($user) {
            return '
            <a class="btn btn-warning" href="' . route('dashboard.user.edit', $user->id) . '">
                <i class="fa-solid fa-pencil"></i>
            </a>
            <a class="btn btn-danger" href="' . route('dashboard.user.destroy', $user->id) . '" data-toggle="modal" data-target="#deleteModal'. $user->id .'">
                <i class="fa-solid fa-trash"></i>
            </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="deleteModal'. $user->id . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body">Confirm to delete '.$user->name . ' ?</div>
                    <div class="modal-footer">
                    <form method="POST" action="' . route('dashboard.user.destroy', $user->id) . '">
                        <button class=" btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-danger" type="submit">Delete</button>
                        '. method_field('delete') . csrf_field() .'
                    </form>
                    </div>
                </div>
                </div>
            </div>
            ';
        })
        ->rawColumns(['action'])
        ->make();
        }
        return view('pages.backend.user.index', [
            'head' => 'User'
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
    public function edit(User $user)
    {
        return view('pages.backend.user.edit', [
            'head' => 'Edit User',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $data = $request->all();
        $user->update($data);
        return redirect()->route('dashboard.user.index')->with('success', 'User Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('dashboard.user.index')->with('success', 'Delete User Successfully');
    }
}
