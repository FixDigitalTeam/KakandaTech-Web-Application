@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <a class="btn btn-primary mb-3" href="{{ route('dashboard.transaction.index') }}">
    <i class="fa-solid fa-caret-left"></i> Back
  </a>

  <!-- Page Heading -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">{{ $transaction->user->name }} Transaction</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <tbody>
            <tr>
              <td>Customer</td>
              <td>{{ $transaction->user->name }}</td>
            </tr>
            <tr>
              <td>Package</td>
              <td>{{ $transaction->package->nama_package }}</td>
            </tr>
            <tr>
              <td>Phone Number</td>
              <td>{{ $transaction->phone_number }}</td>
            </tr>
            <tr>
              <td>Payment Link</td>
              <td>{{ $transaction->payment_url }}</td>
            </tr>
            <tr>
              <td>Payment Total</td>
              <td>Rp.{{ $transaction->payment_total }}</td>
            </tr>
            <tr>
              <td>Payment Status</td>
              <td>{{ $transaction->payment_status }}</td>
            </tr>
            <tr>
              <td>Project Description</td>
              <td>{!! $transaction->project_desc !!}</td>
            </tr>
            <tr>
              <td>Process Description</td>
              <td>{!! $transaction->process_desc !!}</td>
            </tr>
            <tr>
              <td>Deadline</td>
              <td>{{ $transaction->deadline }}</td>
            </tr>
            <tr>
              <td>Working Status</td>
              <td>{{ $transaction->working_status}}</td>
            </tr>
            <tr>
              <td>Percentage</td>
              <td>{{ $transaction->persentase}}</td>
            </tr>
            <tr>
              <td>Buying Time</td>
              <td>{{ \Carbon\Carbon::create($transaction->created_at)->format('F n, Y') }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

@endsection