<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\PackageRequest;
use Yajra\DataTables\Facades\DataTables;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
        return DataTables::of(Package::with('product')->get())
        ->addColumn('action', function($package) {
            return '
            <a class="btn btn-info" href="' . route('dashboard.package.show', $package->id_package) . '">
                <i class="fa-solid fa-eye"></i>
            </a>
            <a class="btn btn-warning" href="'. route('dashboard.package.edit', $package->id_package) .'">
                <i class="fa-solid fa-pencil"></i>
            </a>
            <a class="btn btn-danger" href="'. route('dashboard.package.destroy', $package->id_package) .'" data-toggle="modal" data-target="#deleteModal' . $package->id_package  . '">
                <i class="fa-solid fa-trash"></i>
            </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="deleteModal' . $package->id_package . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body">Confirm to delete '. $package->nama_package . ' ?</div>
                    <div class="modal-footer">
                    <form method="POST" action="' . route('dashboard.package.destroy', $package->id_package) . '">
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
        return view('pages.backend.package.index', [
            'head' => 'Package'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::get();
        return view('pages.backend.package.create', [
            'head' => 'Create Package',
        ], compact('product', $product));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageRequest $request)
    {
        $data = $request->all();
        Package::create($data);
        return redirect()->route('dashboard.package.index')->with('success', 'Package Create Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        return view('pages.backend.package.view', [
            'head' => 'View Content',
            'package' => $package
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        $product = Product::get();
        return view('pages.backend.package.edit', [
            'head' => 'Edit Package',
            'package' => $package
        ], compact('product',$product));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PackageRequest $request, Package $package)
    {
        $data = $request->all();
        $package->update($data);
        return redirect()->route('dashboard.package.index')->with('success', 'Package Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();

        return redirect()->route('dashboard.package.index')->with('success', 'Delete Package Successfully');
    }
}
