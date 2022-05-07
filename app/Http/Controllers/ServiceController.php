<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Service::query();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return ' 
                    <a href="' . route('dashboard.service.edit', $item->id) . '" class="bg-gray-500 text-white rounded-md px-4 py-1 md-2 ml-4 inline-block">
                        Edit
                    </a>
                    <form class="inline-block" action="' . route('dashboard.service.destroy', $item->id) . '" method="POST">
                        <button class="bg-red-500 delete text-white rounded-md px-2 py-1 md-2 ml-4">
                            Hapus
                        </button>
                    ' . method_field('delete') . csrf_field() . '
                    </form>
                    ';
                })
                ->editColumn('Harga', function ($item) {
                    return number_format($item->Harga);
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.backend.service.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $data = $request->all();

        Service::create($data);
        
        return redirect()->route('dashboard.service.index')->with('success', 'Data Berhasil Disimpan!');
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
    public function edit(Service $service)
    {
        return view('pages.backend.service.edit', [
            'item' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, Service $service)
    {
        $data = $request->all();
        
        $service->update($data);

        return redirect()->route('dashboard.service.index')->with('success', 'Success! Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('dashboard.service.index')->with('success', 'Success! Deleted');
    }
}
