@extends('layouts.main')

@section('container')

<h1 class="mb-5">{{ $title }}</h1>

<div class="container">
  <div class="row">
    @foreach ($items as $item)

    <div class="col-md-4 mb-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $item->nama_package }}</h5>
          <p>
            <small>
              <p>{{ $item->keuntungan_1 }}</p>
            </small>
          </p>
          <a href="{{ route('verification', $item->id_package) }}" class="text-decoration-none btn btn-primary">Pilih
            Paket</a>
        </div>
      </div>
    </div>

    @endforeach
  </div>
</div>

@endsection