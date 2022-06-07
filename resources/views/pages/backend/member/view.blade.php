@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <a class="btn btn-primary mb-3" href="{{ route('dashboard.mytransaction.index') }}">
    <i class="fa-solid fa-caret-left"></i> Back
  </a>

  @if ($mytransaction->payment_status == 'Success' and $mytransaction->project_desc == '')
  <div class="alert alert-success" role="alert">
    Your payment has been successful. Please complete the project description!
  </div>
  <!-- Page Heading -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Project Description</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('dashboard.mytransaction.update', $mytransaction->id_transaction) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="project_desc" class="form-label">Project Description</label>
          <textarea class="form-control" name="project_desc" id="project_desc">
            {!! old('project_desc') ?? $mytransaction->project_desc !!}
          </textarea>
        </div>
        <button type="submit" class="btn btn-primary float-right">Submit</button>
      </form>
    </div>
  </div>
  @endif


  <!-- Page Heading -->
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
              <td>{{ date('l, d F Y', strtotime($mytransaction->deadline)) }}</td>
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
              <td>Rp. {{ $mytransaction->payment_total }}</td>
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
              <td>{{ $mytransaction->created_at->translatedFormat('l, d F Y') }}</td>
            </tr>
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