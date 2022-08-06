<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = User::where('username', $username)->first();

        if ($user && Hash::check($password, $user->password)) {
            $request->session()->put('user', $user);
            return redirect('home');
        } else {
            // return response()->json([
            //     'status' => 'error',
            //     'message' => 'Username or password is incorrect'
            // ]);
            return redirect('/');
        }
    }

    function home(Request $request)
    {
        $user = session('user');

        $employees = Employee::all();
        $paginated_employees = Employee::paginate(5);
        $total_emp = $employees->count();

        $users = User::all();
        $total_users = $users->count();
        // paginated users list
        $paginated_users = User::paginate(5);

        if ($user) {
            return view('home.index')->with([
                'total_emp' => $total_emp,
                'paginated_employees'  => $paginated_employees,
                'total_users' => $total_users,
                'paginated_users' => $paginated_users
            ]);
        }

        return redirect('/');
    }

    function list()
    {
        $users = User::all();
        return view('users.index')->with([
            'users' => $users
        ]);
    }

    function admin()
    {
        $users = User::where('user_type', 'admin')->get();
        return view('users.index')->with([
            'users' => $users
        ]);
    }

    function employee()
    {
        $users = User::where('user_type', 'employee')->get();
        return view('users.index')->with([
            'users' => $users
        ]);
    }

    function create()
    {
        return view('users.add_user');
    }

    function store(Request $req)
    {
        if ($req->session()->has('user')) {
            // valiate the request
            $this->validate($req, [
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'username' => 'required|string',
                'password' => 'required|string',
                'gender' => 'required|string',
                'user_type' => 'required|string'
            ]);

            // create a new user
            $user = new User;

            $user->first_name = $req->first_name;
            $user->last_name = $req->last_name;
            $user->username = $req->username;
            $user->password = Hash::make($req->password);
            $user->gender = $req->gender;
            $user->user_type = $req->user_type;


            // dd($employee);
            if ($user->save()) {
                // redirect to employees list
                return redirect('/users/list');
            }
        } else {
            // session flash error message
            // Session::flash('error', 'You are not authorized to perform this action');
            return redirect('/');
        }
    }

    function edit(Request $req, $id)
    {
        if ($req->session()->has('user')) {
            $user = User::find($id);
            return view('users.edit_user')->with([
                'user' => $user
            ]);
        } else {
            return redirect('/');
        }
    }

    function update(Request $req)
    {
        if ($req->session()->has('user')) {

            $updatedUser = User::where("id", $req->id)->update($req->except('_token', 'confirm_password'));

            if ($updatedUser) {
                return redirect('/users/list');
            }
        } else {
            return redirect('/');
        }
    }


    function delete(Request $req, $id)
    {
        if ($req->session()->has('user')) {
            $user = User::find($id);
            $user->delete();
            return redirect('/users/list');
        } else {
            return redirect('/');
        }
    }
}
