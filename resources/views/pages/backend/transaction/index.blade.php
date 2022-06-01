@extends('layouts.app')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Transaction Management</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Transaction Information</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Customer</th>
              <th>Package</th>
              <th>Price</th>
              <th>Payment Status</th>
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
      { data: 'id_transaction', name: 'id_transaction' },
      { data: 'user.name', name: 'user.name' },
      { data: 'package.nama_package', name: 'package.nama_package' },
      { data: 'payment_total', name: 'payment_total' },
      { data: 'payment_status', name: 'payment_status' },
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