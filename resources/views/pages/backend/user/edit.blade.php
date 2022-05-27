@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Update {{ $user->name }}</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('dashboard.user.update', $user->id)   }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="name" value="{{ old('name') ?? $user->name }}">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control" name="email" id="email" value="{{ old('email') ?? $user->email }}">
        </div>
        <div class="mb-3">
          <label for="roles" class="form-label">Roles</label>
          <select name="roles" class="form-select form-control">
            <option value="{{ $user->roles }}">{{ $user->roles }}</option>
            <option disabled>-----------</option>
            <option value="ADMIN">ADMIN</option>
            <option value="USER">USER</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary float-right">Update User</button>
      </form>
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