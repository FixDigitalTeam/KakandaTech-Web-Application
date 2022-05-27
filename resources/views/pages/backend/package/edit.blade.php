@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Update {{ $package->nama_package }}</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('dashboard.package.update', $package->id_package) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="nama_package" class="form-label">Nama Package</label>
          <input type="text" class="form-control" name="nama_package" id="nama_package"
            value="{{ old('nama_package') ?? $package->nama_package }}">
        </div>
        <div class="form-group">
          <label for="keuntungan_1" class="form-label">Keuntungan 1</label>
          <input type="text" class="form-control" name="keuntungan_1" id="keuntungan_1"
            value="{{ old('keuntungan_1') ?? $package->keuntungan_1 }}">
        </div>
        <div class="form-group">
          <label for="keuntungan_2" class="form-label">Keuntungan 2</label>
          <input type="text" class="form-control" name="keuntungan_2" id="keuntungan_2"
            value="{{ old('keuntungan_2') ?? $package->keuntungan_2 }}">
        </div>
        <div class="form-group">
          <label for="keuntungan_3" class="form-label">Keuntungan 3</label>
          <input type="text" class="form-control" name="keuntungan_3" id="keuntungan_3"
            value="{{ old('keuntungan_3') ?? $package->keuntungan_3 }}">
        </div>
        <div class="form-group">
          <label for="keuntungan_4" class="form-label">Keuntungan 4</label>
          <input type="text" class="form-control" name="keuntungan_4" id="keuntungan_4"
            value="{{ old('keuntungan_4') ?? $package->keuntungan_4 }}">
        </div>
        <div class="form-group">
          <label for="keuntungan_5" class="form-label">Keuntungan 5</label>
          <input type="text" class="form-control" name="keuntungan_5" id="keuntungan_5"
            value="{{ old('keuntungan_5') ?? $package->keuntungan_5 }}">
        </div>
        <div class="form-group">
          <label for="keuntungan_6" class="form-label">Keuntungan 6</label>
          <input type="text" class="form-control" name="keuntungan_6" id="keuntungan_6"
            value="{{ old('keuntungan_6') ?? $package->keuntungan_6 }}">
        </div>
        <div class="form-group">
          <label for="keuntungan_7" class="form-label">Keuntungan 7</label>
          <input type="text" class="form-control" name="keuntungan_7" id="keuntungan_7"
            value="{{ old('keuntungan_7') ?? $package->keuntungan_7 }}">
        </div>
        <div class="form-group">
          <label for="keuntungan_8" class="form-label">Keuntungan 8</label>
          <input type="text" class="form-control" name="keuntungan_8" id="keuntungan_8"
            value="{{ old('keuntungan_8') ?? $package->keuntungan_8 }}">
        </div>
        <div class="form-group">
          <label for="waktu_pengerjaan" class="form-label">Waktu Pengerjaan</label>
          <input type="text" class="form-control" name="waktu_pengerjaan" id="waktu_pengerjaan"
            value="{{ old('waktu_pengerjaan') ?? $package->waktu_pengerjaan }}">
        </div>
        <div class="form-group">
          <label for="id_product" class="form-label">Product</label>
          <select name="id_product" class="form-select form-control">
            <option disabled>Choose Product</option>
            @foreach ($product as $product)
            <option value="{{ $product->id_product }}">{{ $product->nama_product }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="harga" class="form-label">Harga</label>
          <input type="text" class="form-control" name="harga" id="harga" value="{{ old('harga') ?? $package->harga }}">
        </div>
        <div class="form-group">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <textarea class="form-control" name="deskripsi" id="contentBlog">
            {!! old('deskripsi') ?? $package->deskripsi !!}
          </textarea>
        </div>
        <button type="submit" class="btn btn-primary float-right">Update Package</button>
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