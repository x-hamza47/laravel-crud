@extends('main')

@section('content')
<div class="container-fluid w-75 bg-dark my-5 px-3 py-4 rounded text-light">
    {{-- <h1 class="text-white text-center">All <span class="text-danger">Employees</span> </h1> --}}
    <table class="table table-secondary table-striped table-hover align-middle text-center border  border-dark-subtle table-bordered">
        <thead class="table-dark">
        <tr>
            <th scope="col" class="p-3">ID</th>
            <th scope="col" class="p-3">Employee Name</th>
            <th scope="col" class="p-3">Email</th>
            <th scope="col" class="p-3">Department</th>
            <th scope="col" class="p-3">Salary</th>
            <th scope="col" class="p-3">City</th>
            <th scope="col" class="p-3">View</th>
            <th scope="col" class="p-3">Update</th>
            <th scope="col" class="p-3">Delete</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($employees as $employee)
            <tr>
                <td scope="row">{{ $loop->iteration }}</th>
                <td>{{ $employee->employee_name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->department }}</td> 
                <td>{{ $employee->salary }}</td>
                <td>{{ $employee->city }}</td>
                <td> <a href="{{ route('view.user',$employee->employee_id) }}" class="btn btn-primary btn-sm">View</a></td>
                <td> <a href="{{ route('emp.edit', $employee->employee_id) }}" class="btn btn-warning btn-sm">Update</a></td>
                <td> <a href="{{ route('emp.delete', $employee->employee_id) }}" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
    
@endsection