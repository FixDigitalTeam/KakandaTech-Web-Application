@extends('layouts.landing-main')
@section('container')
<!-- Start Page Title Area -->
<div class="page-title-area">
   <div class="container">
      <div class="page-title-content">
         <h2>{{ $title }}</h2>
         <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Verifikasi Pemesanan</li>
         </ul>
      </div>
   </div>
   <div class="divider"></div>
   <div class="lines">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
   </div>
   <div class="banner-shape1"><img src="{{ url('landing-assets/img/shape/shape9.png') }}" alt="image"></div>
</div>
<!-- End Page Title Area -->

<!-- Start Checkout Area -->
<div class="checkout-area ptb-100">
   <div class="container">
      <form action="{{ route('checkout') }}" method="post" autocomplete="off">
         @csrf
         <input type="hidden" value="{{ $package->id_package }}" name="id_package">
         <input type="hidden" value="{{ $package->harga }}" name="payment_total">
         <div class="row">
            <div class="col-lg-6 col-md-12">
               <div class="billing-details">
                  <h3 class="title mb-4">Verifikasi Pemesanan</h3>
                  <div class="row">
                     <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                           <label>Nama Pembeli<span class="required">*</span></label>
                           <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                           <label>Email <span class="required">*</span></label>
                           <input type="text" class="form-control" value="{{ Auth::user()->email }}" readonly>
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                           <label>Konfirmasi Nomor Handphone <span class="required">*</span></label>
                           <input type="text" class="form-control" name="phone_number" maxlength="13" autofocus>
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                           <label>Konfirmasi Tanggal Pembelian <span class="required">*</span></label>
                           <input type="date" class="form-control" value="{{ date('Y-m-d') }}" readonly>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-12">
               <div class="order-details">
                  <h3 class="title">Detail Pemesanan</h3><br>
                  <div class="order-table table-responsive">
                     <table class="table table-bordered mt-1">
                        <tbody>
                           <tr>
                              <td class="product-name">Nama Paket</a>
                              <td class="product-total">
                                 <span class="subtotal-amount">{{ $package->nama_package }}</span>
                              </td>
                           </tr>
                           <tr>
                              <td class="product-name">Harga</a>
                              <td class="product-total">
                                 <span class="subtotal-amount">{{ $package->harga }}</span>
                              </td>
                           </tr>
                           <tr>
                              <td class="product-name">Lama Pengerjaan</a>
                              <td class="product-total">
                                 <span class="subtotal-amount">{{ $package->waktu_pengerjaan }}</span>
                              </td>
                           </tr>
                           <tr>
                              <td class="product-name">Kategori Layanan</a>
                              <td class="product-total">
                                 <span class="subtotal-amount">{{ $package->product->nama_product }}</span>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div class="payment-box">
                     <div class="payment-method">
                        <p>
                           <input type="radio" id="direct-bank-transfer" name="radio-group" checked>
                           <label for="direct-bank-transfer">Midtrans Payment</label>
                           Pembayaran lebih mudah dan cepat dengan Midtrans. Keamanan transaksi terjamin. Dilengkapi
                           juga dengan pendeteksi fraud dan terintegrasi dengan 24 pilihan metode pembayaran online.
                        </p>
                     </div>
                     <button type="submit" class="default-btn"><i class='bx bx-paper-plane'></i> Verifikasi
                        Pesanan</button>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
<!-- End Checkout Area -->
@endsection