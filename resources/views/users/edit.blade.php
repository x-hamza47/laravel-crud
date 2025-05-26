@extends('main')

@section('content')
<div class="container-fluid w-50 bg-dark my-5 px-3 py-4 rounded text-light">
<h1 class="text-white text-center">Edit <span class="text-danger">Employee</span> </h1>
{{-- ! Form --}}
    <form action="{{ route('emp.update', $employee->employee_id) }}" method="POST">
        @csrf
        @method('PUT')
        {{-- ? Name --}}
        <div class="mb-3">
            <label for="Input1" class="form-label">Employee Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="Input1" placeholder="e.g. John Doe" value="{{ $employee->employee_name }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        {{-- ? Email --}}
        <div class="mb-3">
            <label for="Input2" class="form-label">Email Address</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="Input2" placeholder="john@gmail.com" value="{{ $employee->email }}">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        {{-- ? Department --}}
        <div class="mb-3">
            <label for="Input3" class="form-label">Department</label>
            <select class="form-select @error('department') is-invalid @enderror" id="Input3" name="department">
                <option selected disabled>Select a department</option>
                <option value="HR" @selected($employee->department == 'HR')>HR</option>
                <option value="Networking" @selected($employee->department == 'Networking')>Networking</option>
                <option value="QA" @selected($employee->department == 'QA')>QA</option>
                <option value="Development" @selected($employee->department == 'Development')>Development</option>
            </select>
            @error('department')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        {{-- ? Salary --}}
        <div class="mb-3">
            <label for="Input4" class="form-label">Salary</label>
            <input type="number" name="salary" class="form-control @error('salary') is-invalid @enderror" id="Input4" placeholder="e.g. 50000" value="{{ $employee->salary }}">
            @error('salary')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        {{-- ? City --}}
        <div class="mb-3">
            <label for="Input5" class="form-label">City</label>
            <select class="form-select @error('city') is-invalid @enderror" id="Input5" name="city">
                <option selected disabled>Select a City</option>
                <option value="Karachi" @selected($employee->city == 'Karachi')>Karachi</option>
                <option value="Lahore" @selected($employee->city == 'Lahore')>Lahore</option>
                <option value="Islamabad" @selected($employee->city == 'Islamabad')>Islamabad</option>
            </select>
            @error('city')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-4">
            <input type="submit" value="Update Employee" class="btn btn-primary w-100 fw-semibold py-2">
        </div>

    </form>
</div>
@endsection