@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Create Content</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('dashboard.blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          <textarea class="form-control" name="content" id="contentBlog">
            {!! old('content') !!}
          </textarea>
        </div>
        <button type="submit" class="btn btn-primary float-right">Create Content</button>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->


@endsection

@push('scripts')
<script>
  CKEDITOR.replace( 'contentBlog' );
</script>
<script>
  $(document).ready(function() {
            toastr.options.timeOut = 5000;
            @if ($errors->any())
            @foreach ($errors->all() as $error)
              toastr.error('{{ $error }}');
            @endforeach
            
            @endif
          });
</script>
@endpush
