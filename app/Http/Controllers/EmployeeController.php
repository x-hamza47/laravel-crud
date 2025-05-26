<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // ! Show All Users
    public function index(){
        $employees = Employee::all();
        return view('users.index',compact('employees'));
    }

    // ! Return Create View
    public function create() {
        return view('users.create');
    }

    // ! Add Employee
    public function store(Request $request){
        $employee = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:employees,email',
            'department' => 'required|in:HR,QA,Networking,Development',
            'salary' => 'required|numeric|min:0',
            'city' => 'required|in:Karachi,Lahore,Islamabad'
        ]);

        Employee::create([
            'employee_name' => $employee['name'],
            'email' => $employee['email'],
            'department' => $employee['department'],
            'salary' => $employee['salary'],
            'city' => $employee['city'],
        ]);

        return redirect()->route('emp.show')->with('Success','Employee added Successfully');
    }

    public function singleUser(int $id){
        $employee = Employee::find($id);
        return view('users.user',compact('employee'));
    }

    public function editUser(int $id){
        $employee = Employee::find($id);
        return view('users.edit',compact('employee'));
    }

    public function update(Request $request, Int $id){

        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:employees,email,'. $id .',employee_id',
            'department' => 'required|in:HR,QA,Networking,Development',
            'salary' => 'required|numeric|min:0',
            'city' => 'required|in:Karachi,Lahore,Islamabad'
        ]);
        
        $employee = Employee::find($id);
        $employee->update([
            'employee_name' => $validated['name'],
            'email' => $validated['email'],
            'department' => $validated['department'],
            'salary' => $validated['salary'],
            'city' => $validated['city'],
        ]);

        return redirect()->route('emp.show')->with('Success','Employee updated Successfully');
    }
    
    public function destroy(Int $id){
        Employee::destroy($id);
        return redirect()->route('emp.show')->with('Success','Employee updated Successfully');
    }

}