<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Requests\BlogRequest;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
        return DataTables::of(Blog::query())
        ->addColumn('action', function($blog) {
            return '
            <a class="btn btn-info" href="'. route('dashboard.blog.show', $blog->id_post) .'">
                <i class="fa-solid fa-eye"></i>
            </a>
            <a class="btn btn-warning" href="'. route('dashboard.blog.edit', $blog->id_post) .'">
                <i class="fa-solid fa-pencil"></i>
            </a>
            <a class="btn btn-danger" href="'. route('dashboard.blog.destroy', $blog->id_post) .'" data-toggle="modal" data-target="#deleteModal'. $blog->id_post .'">
                <i class="fa-solid fa-trash"></i>
            </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="deleteModal'. $blog->id_post . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body">Confirm to delete '.$blog->title . ' ?</div>
                    <div class="modal-footer">
                    <form method="POST" action="'. route('dashboard.blog.destroy', $blog->id_post) .'">
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
        ->editColumn('created_at', function ($blog) {
            return Carbon::parse($blog->created_at)->diffForHumans();
        })
        ->rawColumns(['action'])
        ->make();
        }
        return view('pages.backend.blog.index', [
            'head' => 'Blog'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.blog.create', [
            'head' => 'Create Content'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        Blog::create($data);
        return redirect()->route('dashboard.blog.index')->with('success', 'Content Create Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('pages.backend.blog.view', [
            'head' => 'View Content',
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('pages.backend.blog.edit', [
            'head' => 'Edit Content',
            'blog' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $blog->update($data);
        return redirect()->route('dashboard.blog.index')->with('success', 'Content Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('dashboard.blog.index')->with('success', 'Delete Content Successfully');
    }
}
