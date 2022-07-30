<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function create()
    {
        return view('dashboard.create_employee');
    }
    function store(Request $req)
    {
        // valiate the request
        $this->validate($req, [
            'first_name' => 'required|string',
            'middle_name' => 'required|string',
            'last_name' => 'required|string',
            'employed_date' => 'required|date',
            'job_title' => 'required|string',
            'status' => 'required|string',
        ]);

        // create a new employee
        $employee = new Employee;
        $employee->first_name = $req->first_name;
        $employee->middle_name = $req->middle_name;
        $employee->last_name = $req->last_name;
        $employee->employed_date = $req->employed_date;
        $employee->job_title = $req->job_title;
        $employee->status = $req->status;

        // save the employee image 
        if ($req->hasFile('emp_img')) {
            $image = $req->file('emp_img');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
            $employee->image = $image_name;
        } else {
            $employee->image = 'images/default.png';
        }

        $employee->save();

        // redirect to the dashboard
        return redirect('/employees/list');
    }

    function list()
    {
        // $employees = Employee::all();
        // paginated list
        $employees = Employee::paginate(10);
        return view('dashboard.employees_list', ['employees' => $employees, 'page_title' => 'Employees']);
    }

    function current()
    {
        $employees = Employee::where('status', '=', 'active')->paginate(10);
        return view('dashboard.employees_list', ['employees' => $employees, 'page_title' => 'Current Employees']);
    }

    function former()
    {
        // paginated list
        $employees = Employee::where('status', '=', 'former')->paginate(10);
        return view('dashboard.employees_list', ['employees' => $employees, 'page_title' => 'Former Employees']);
    }
}
