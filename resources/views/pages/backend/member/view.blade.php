@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <a class="btn btn-primary mb-3" href="{{ route('dashboard.mytransaction.index') }}">
    <i class="fa-solid fa-caret-left"></i> Back
  </a>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">{{ Auth::user()->name }} Working Status</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <tbody>
            <tr>
              <td>Percentage</td>
              <td style="width: 80%">
                <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                    style="width: {{ $mytransaction->persentase }}">{{
                    $mytransaction->persentase }}</div>
                </div>
              </td>
            </tr>
            <tr>
              <td>Working Status</td>
              <td>{{ $mytransaction->working_status}}</td>
            </tr>
            <tr>
              <td>Process Description</td>
              <td>{!! $mytransaction->process_desc !!}</td>
            </tr>
            <tr>
              <td>Deadline</td>
              <td>{{ $mytransaction->deadline }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Page Heading -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">{{ Auth::user()->name }} Transaction Detail</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <tbody>
            <tr>
              <td>Customer</td>
              <td style="width: 80%">{{ $mytransaction->user->name }}</td>
            </tr>
            <tr>
              <td>Package</td>
              <td>{{ $mytransaction->package->nama_package }}</td>
            </tr>
            <tr>
              <td>Phone Number</td>
              <td>{{ $mytransaction->phone_number }}</td>
            </tr>
            <tr>
              <td>Payment Link</td>
              <td>{{ $mytransaction->payment_url }}</td>
            </tr>
            <tr>
              <td>Payment Total</td>
              <td>Rp.{{ $mytransaction->payment_total }}</td>
            </tr>
            <tr>
              <td>Payment Status</td>
              <td>{{ $mytransaction->payment_status }}</td>
            </tr>
            <tr>
              <td>Project Description</td>
              <td>{!! $mytransaction->project_desc !!}</td>
            </tr>
            <tr>
              <td>Buying Time</td>
              <td>{{ \Carbon\Carbon::create($mytransaction->created_at)->format('F n, Y') }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

@endsection