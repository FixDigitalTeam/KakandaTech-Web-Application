@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <a class="btn btn-primary mb-3" href="{{ route('dashboard.blog.index') }}">
    <i class="fa-solid fa-caret-left"></i> Back
  </a>

  <!-- Page Heading -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">{{ $blog->title }} Information </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <tbody>
            <tr>
              <td>Title</td>
              <td>{{ $blog->title }}</td>
            </tr>
            <tr>
              <td>Slug</td>
              <td>{{ $blog->slug }}</td>
            </tr>
            <tr>
              <td>Content</td>
              <td>{{ $blog->content }}</td>
            </tr>
            <tr>
              <td>Post</td>
              <td>{{ \Carbon\Carbon::create($blog->created_at)->format('F n, Y') }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

@endsection