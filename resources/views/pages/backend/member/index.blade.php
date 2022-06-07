@extends('layouts.app')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">My Transaction</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col-lg-6">
          <h5 class="mt-2 font-weight-bold text-primary">Transaction Information</h5>
        </div>
        <div class="col-lg-6" align="right">
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pilih Paket Baru
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{ route('seocontent') }}">SEO Content</a>
              <a class="dropdown-item" href="{{ route('webdevelopment') }}">Website Development</a>
              <a class="dropdown-item" href="{{ route('mobiledevelopment') }}">Mobile Development</a>
            </div>
          </div>
        </div>
      </div>
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