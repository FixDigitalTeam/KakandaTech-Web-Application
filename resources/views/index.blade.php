@extends('templating/main')
@section('title', 'Perpusla - Perpustakaan Laravel')
@section('container')
   <div class="container">
      <div class="row py-5">
         <div class="col-md-12 mx-auto">
            <div class="jumbotron text-dark shadow-sm">
               <h1 class="display-5 text-center">- {{ $pagetitle }} -</h1>
               <p class="lead my-3">{{ $pagesubtitle }}</p>
               <hr class="my-4">
               <p>{{ $description }}</p>
               <a href="#">
                  <button type="button" class="btn btn-danger text-white"><span class="fa fa-user-md"></span> Register Pegawai</button>
               </a> &nbsp;
               <a href="#">
                  <button type="button" class="btn btn-success"><span class="fa fa-user-secret"></span> Register Anggota</button>
               </a>
            </div>
         </div>
      </div>
   </div>
@endsection