<?php

namespace App\Http\Controllers;

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

        if ($user) {
            return view('dashboard.home');
        }

        return redirect('/');
    }
}
