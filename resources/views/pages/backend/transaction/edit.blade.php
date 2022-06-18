@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Update {{ $transaction->user->name }} Transaction</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('dashboard.transaction.update', $transaction->id_transaction)   }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="payment_status" class="form-label">Payment Status</label>
          <select name="payment_status" class="form-select form-control">
            <option value="{{ $transaction->payment_status }}">{{ $transaction->payment_status }}</option>
            <option disabled>-----------------</option>
            <option value="Pending">Pending</option>
            <option value="Success">Success</option>
            <option value="Cancel">Cancel</option>
            <option value="Failed">Failed</option>
          </select>
        </div>
        <div class="form-group">
          <label for="working_status" class="form-label">Working Status</label>
          <select name="working_status" class="form-select form-control">
            <option value="{{ $transaction->working_status }}">{{ $transaction->working_status }}</option>
            <option disabled>-----------------</option>
            <option value="On Working">On Working</option>
            <option value="Off Working">Off Working</option>
            <option value="Completed">Completed</option>
          </select>
        </div>
        <div class="form-group">
          <label for="persentase" class="form-label">Progress Percentage</label>
          <input type="text" class="form-control" name="persentase" id="persentase"
            value="{{ old('persentase') ?? $transaction->persentase }}">
        </div>
        <div class="form-group">
          <label for="process_desc" class="form-label">Process Description</label>
          <textarea class="form-control" name="process_desc" id="process_desc">
            {!! old('process_desc') ?? $transaction->process_desc !!}
          </textarea>
        </div>
        <button type="submit" class="btn btn-primary float-right">Update Transaction</button>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

@endsection

@push('scripts')
<script>
  CKEDITOR.replace( 'process_desc' );
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