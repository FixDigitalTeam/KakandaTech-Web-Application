@extends('layouts.app')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">My Progress</h6>
    </div>
    <div class="card-body">
      <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100"
          aria-valuemin="0" aria-valuemax="100" style="width: 100%">100%</div>
      </div>
    </div>
  </div>

</div>

<!-- /.container-fluid -->

@endsection