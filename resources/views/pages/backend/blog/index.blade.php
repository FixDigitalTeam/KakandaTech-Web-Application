@extends('layouts.app')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Blog Management</h1>
  <a class="btn btn-primary shadow-md mb-3" href="{{ route('dashboard.blog.create') }}">
    <i class="fa-solid fa-plus"></i> Create Content
  </a>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Content Information</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Post</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
@endsection

@push('scripts')
<script>
  $(document).ready( function () {
    $('#myTable').DataTable(
      {
      processing: true,
      serverSide: true,
      ajax: '{!! url()->current() !!}',
      columns: [
      { data: 'id_post', name: 'id_post' },
      { data: 'title', name: 'title' },
      { data: 'created_at', name: 'created_at' },

      { 
        data: 'action', 
        name: 'action',
        orderable: false, 
        searchable: false
      }
      ]
      });
    });
</script>
<script>
  $(document).ready(function() {
        toastr.options.timeOut = 5000;
        @if (Session::has('error'))
        toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
        toastr.success('{{ Session::get('success') }}');
        @endif
      });
</script>
@endpush