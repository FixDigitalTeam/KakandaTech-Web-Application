@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <a class="btn btn-primary mb-3" href="{{ route('dashboard.package.index') }}">
    <i class="fa-solid fa-caret-left"></i> Back
  </a>

  <!-- Page Heading -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">{{ $package->nama_package }} Information </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <tbody>
            <tr>
              <td>Package</td>
              <td>{{ $package->nama_package }}</td>
            </tr>
            <tr>
              <td>Keuntungan 1</td>
              <td>{{ $package->keuntungan_1 }}</td>
            </tr>
            <tr>
              <td>Keuntungan 2</td>
              <td>{{ $package->keuntungan_2 }}</td>
            </tr>
            <tr>
              <td>Keuntungan 3</td>
              <td>{{ $package->keuntungan_3 }}</td>
            </tr>
            <tr>
              <td>Keuntungan 4</td>
              <td>{{ $package->keuntungan_4 }}</td>
            </tr>
            <tr>
              <td>Keuntungan 5</td>
              <td>{{ $package->keuntungan_5 }}</td>
            </tr>
            <tr>
              <td>Keuntungan 6</td>
              <td>{{ $package->keuntungan_6 }}</td>
            </tr>
            <tr>
              <td>Keuntungan 7</td>
              <td>{{ $package->keuntungan_7 }}</td>
            </tr>
            <tr>
              <td>Keuntungan 8</td>
              <td>{{ $package->keuntungan_8 }}</td>
            </tr>
            <tr>
              <td>Waktu Pengerjaan</td>
              <td>{{ $package->waktu_pengerjaan }}</td>
            </tr>
            <tr>
              <td>Product</td>
              <td>{{ $package->product->nama_product }}</td>
            </tr>
            <tr>
              <td>Harga</td>
              <td>{{ $package->harga }}</td>
            </tr>
            <tr>
              <td>Deskripsi</td>
              <td>{{ $package->deskripsi }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

@endsection