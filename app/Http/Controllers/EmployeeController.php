<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeAddress;
use App\Models\Kin;
use App\Models\Subcity;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function create()
    {
        $subCities = Subcity::all();
        return view('employee.add_employee')->with(['subCities' => $subCities]);
    }
    function store(Request $req)
    {
        if($req->session()->has('user')) {
            // valiate the request
            // $this->validate($req, [
            //     'first_name' => 'required|string',
            //     'middle_name' => 'required|string',
            //     'last_name' => 'required|string',
            //     'employed_date' => 'required|date',
            //     'job_title' => 'required|string',
            //     'status' => 'required|string',
            // ]);

            // create a new employee
            $employee = new Employee;

            $employee->first_name = $req->first_name;
            $employee->middle_name = $req->middle_name;
            $employee->last_name = $req->last_name;
            $employee->date_employed = $req->date_employed;
            $employee->job_title = $req->job_title;
            $employee->salary = $req->salary;
            $employee->status = $req->status;

            // save the employee image 
            if ($req->hasFile('emp_img')) {
                // rename image
                $newImageName = time() . '-' . $req->first_name . '.' . $req->emp_img->extension() ;
                // upload image
                $req->emp_img->move(public_path('uploads/images/employees/'), $newImageName);


                $employee->emp_img = 'uploads/images/employees/'.$newImageName;
            } else {
                $employee->emp_img = 'uploads/images/employees/default.png';
            }

            // dd($employee);
            if ($employee->save()) {

                
                if ($employee->id){
                    $emp_address = new EmployeeAddress();

                    $emp_address->employee_id = $employee->id;
                    $emp_address->phone_no_1 = $req->phone_no_1;
                    $emp_address->phone_no_2 = $req->phone_no_2;
                    $emp_address->sub_city = $req->sub_city;
                    $emp_address->woreda = $req->woreda;
                    $emp_address->house_no = $req->house_no;

                    $emp_address->save();

                    $kin = new Kin();
                    
                    $kin->first_name = $req->first_name;
                    

                }

                // redirect to employees list
                return redirect('/employees/list');
            }
        }

    }

    function list()
    {
        // $employees = Employee::all();
        // paginated list
        $employees = Employee::all();
        return view('employee.index', ['employees' => $employees, 'page_title' => 'Employees']);
    }

    function detail ($id) {
        $employee = Employee::find($id);

        return view('employee.detail')->with([
            'employee' => $employee
        ]);
    }

    function current()
    {
        $employees = Employee::where('status', '=', 'active')->get();
        return view('employee.index', ['employees' => $employees, 'page_title' => 'Current Employees']);
    }

    function former()
    {
        // paginated list
        $employees = Employee::where('status', '=', 'former')->get();
        return view('employee.index', ['employees' => $employees, 'page_title' => 'Former Employees']);
    }
}
