<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeAddress;
use App\Models\EmployeeId;
use App\Models\EmployeeKin;
use App\Models\Kin;
use App\Models\KinAddress;
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
        if ($req->session()->has('user')) {
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

            $employee->first_name = ucfirst($req->first_name);
            $employee->middle_name = ucfirst($req->middle_name);
            $employee->last_name = ucfirst($req->last_name);
            $employee->date_employed = $req->date_employed;
            $employee->job_title = $req->job_title;
            $employee->salary = $req->salary;
            $employee->gender = ucfirst($req->gender);
            $employee->status = ucfirst($req->status);

            // save the employee image 
            if ($req->hasFile('emp_img')) {
                // rename image
                $newImageName = time() . '-' . $req->first_name . '.' . $req->emp_img->extension();
                // upload image
                $req->emp_img->move(public_path('uploads/images/employees/'), $newImageName);


                $employee->emp_img = 'uploads/images/employees/' . $newImageName;
            } else {
                $employee->emp_img = 'uploads/images/employees/default.png';
            }

            // dd($employee);
            if ($employee->save()) {


                if ($employee->id) {
                    $emp_address = new EmployeeAddress();

                    $emp_address->employee_id = $employee->id;
                    $emp_address->phone_no_1 = $req->phone_no_1;
                    $emp_address->phone_no_2 = $req->phone_no_2;
                    $emp_address->sub_city = $req->sub_city;
                    $emp_address->woreda = $req->woreda;

                    $emp_address->house_no = $req->house_no;

                    $emp_address->save();

                    // save employee id
                    $emp_id = new EmployeeId();

                    $emp_id->employee_id = $employee->id;
                    $emp_id->employee_id_no = $req->employee_id_no;
                    $emp_id->employee_id_type = $req->employee_id_type;
                    if ($req->hasFile('id_img')) {
                        // rename image
                        $idImageName = time() . '-' . $req->first_name . '.' . $req->id_img->extension();
                        // upload image
                        $req->id_img->move(public_path('uploads/images/ids/'), $idImageName);


                        $emp_id->employee_id_image = 'uploads/images/ids/' . $newImageName;
                    } else {
                        $emp_id->employee_id_image = 'uploads/images/ids/default.png';
                    }

                    $emp_id->save();

                    // save kin details

                    $kin = new Kin();

                    $kin->first_name = ucfirst($req->kin_first_name);
                    $kin->last_name = ucfirst($req->kin_last_name);

                    if ($req->hasFile('kin_img')) {
                        // rename image
                        $kinImageName = time() . '-' . $req->kin_first_name . '.' . $req->kin_img->extension();
                        // upload image
                        $req->kin_img->move(public_path('uploads/images/kins/'), $kinImageName);


                        $kin->kin_img = 'uploads/images/kins/' . $newImageName;
                    } else {
                        $kin->kin_img = 'uploads/images/kins/default.png';
                    }

                    if ($kin->save()) {
                        // save kin address
                        $kin_address = new KinAddress();
                        $kin_address->kin_id = $kin->id;
                        $kin_address->phone_no_1 = $req->kin_phone_no_1;
                        $kin_address->phone_no_2 = $req->kin_phone_no_2;
                        $kin_address->sub_city = $req->kin_subcity;
                        $kin_address->woreda = $req->kin_woreda;
                        $kin_address->house_no = $req->kin_house_no;
                        $kin_address->save();

                        // save employee kin relation
                        $employee_kin = new EmployeeKin();
                        $employee_kin->employee_id = $employee->id;
                        $employee_kin->kin_id = $kin->id;
                        $employee_kin->kin_relationship = $req->kin_relationship;
                        // $employee_kin->kin_relationship = "father";

                        $employee_kin->save();
                        //  ->kin()->attach($kin->id);

                        return redirect('/home')->with('success', 'Employee created successfully');
                    }
                } else {
                    return redirect()->route('employee.index')->with('error', 'Employee not created');
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

    function detail($id)
    {
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

    function edit($id)
    {
        $employee = Employee::find($id);
        $subCities = Subcity::all();
        return view('employee.edit_employee')->with([
            'employee' => $employee,
            'subCities' => $subCities
        ]);
    }

    function delete($id)
    {
        $employees = Employee::find($id);
        return view('employee.delete_employee')->with([
            'employees' => $employees,
            'page_title' => 'Delete Employee'
        ]);
    }
}
