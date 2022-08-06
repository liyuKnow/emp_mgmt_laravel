<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session as Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login.index');
});

Route::post('/login', [UserController::class, 'login']);

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});

Route::get('/home', [UserController::class, 'home']);

Route::controller(EmployeeController::class)->prefix('/employees')->group(function () {
    Route::get('/list', 'list');
    Route::get('/current', 'current');
    Route::get('/past', 'former');
    Route::get('/detail/{id}', 'detail');

    Route::get("/create", 'create')->name('add_employee');
    Route::post("/store", 'store')->name('store_employee');

    Route::get("/edit", 'edit');
    Route::post("/update", 'update');

    Route::get("/delete", 'delete');
});

Route::controller(UserController::class)->prefix('/users')->group(function () {
    Route::get('/list', 'list');
    Route::get('/admins', 'admin');
    Route::get('/employees', 'employee');

    Route::get("/create", 'create')->name('add_user');
    Route::post("/store", 'store')->name('store_user');

    Route::get("/edit/{id}", 'edit');
    Route::post("/update", 'update');

    Route::get("/delete/{id}", 'delete');
});
