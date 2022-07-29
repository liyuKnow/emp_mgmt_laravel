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
