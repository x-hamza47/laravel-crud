@extends('main')

@section('content')
<div class="container-fluid w-50 bg-dark my-5 px-3 py-4 rounded text-light">
<h1 class="text-white text-center">Add <span class="text-danger">Employee</span> </h1>
{{-- ! Form --}}
    <form action="{{ route('emp.store') }}" method="POST">
        @csrf
        {{-- ? Name --}}
        <div class="mb-3">
            <label for="Input1" class="form-label">Employee Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="Input1" placeholder="e.g. John Doe">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        {{-- ? Email --}}
        <div class="mb-3">
            <label for="Input2" class="form-label">Email Address</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="Input2" placeholder="john@gmail.com">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        {{-- ? Department --}}
        <div class="mb-3">
            <label for="Input3" class="form-label">Department</label>
            <select class="form-select @error('department') is-invalid @enderror" id="Input3" name="department">
                <option selected disabled>Select a department</option>
                <option value="HR">HR</option>
                <option value="Networking">Networking</option>
                <option value="QA">QA</option>
                <option value="Development">Development</option>
            </select>
            @error('department')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        {{-- ? Salary --}}
        <div class="mb-3">
            <label for="Input4" class="form-label">Salary</label>
            <input type="number" name="salary" class="form-control @error('salary') is-invalid @enderror" id="Input4" placeholder="e.g. 50000">
            @error('salary')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        {{-- ? City --}}
        <div class="mb-3">
            <label for="Input5" class="form-label">City</label>
            <select class="form-select @error('city') is-invalid @enderror" id="Input5" name="city">
                <option selected disabled>Select a City</option>
                <option value="Karachi">Karachi</option>
                <option value="Lahore">Lahore</option>
                <option value="Islamabad">Islamabad</option>
            </select>
            @error('city')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-4">
            <input type="submit" value="Add Employee" class="btn btn-primary w-100 fw-semibold py-2">
        </div>

    </form>
</div>
@endsection