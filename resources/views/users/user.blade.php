@extends('main')

@section('content')
<div class="container-fluid w-25 bg-dark my-5 px-3 py-4 rounded text-light">
<h1 class="text-white text-center"> <span class="text-danger">Employee</span> </h1>
<div class="card text-center bg-secondary text-white">
    <div class="card-header">
      {{ $employee->department }}
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $employee->employee_name }}</h5>
      <p class="card-text">{{ $employee->email }}</p>
      <p class="card-text">{{ $employee->salary }}</p>
      <p class="card-text">{{ $employee->city }}</p>
      <a href="{{ url()->previous() }}" class="btn btn-primary">Go Back</a>
    </div>

  </div>
</div>
@endsection