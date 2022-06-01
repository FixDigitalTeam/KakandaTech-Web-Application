@extends('layouts.main')

@section('container')

<h1 class="mb-5">{{ $title }}</h1>

<div class="container">
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Paket</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"
      value="{{ $package->nama_package }}" disabled>
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Nama</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"
      value="{{ Auth::user()->name }}" disabled>
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Email</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"
      value="{{ Auth::user()->email }}" disabled>
  </div>
  <form action="{{ route('checkout') }}" method="post">
    @csrf
    <div class="mb-3">
      <input type="text" class="form-control" name="id_package" id="formGroupExampleInput2"
        value="{{ $package->id_package }}" readonly hidden>
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" name="payment_total" id="formGroupExampleInput2"
        value="{{ $package->harga }}" readonly>
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Telepon</label>
      <input type="tel" class="form-control" name="phone_number" id="formGroupExampleInput2"
        placeholder="No telpon bang" required>
    </div>
    <button type="submit" class="btn btn-primary shadow-md">Checkout</button>
  </form>
</div>

@endsection