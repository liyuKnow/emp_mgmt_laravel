<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session as Session;
use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Route::post('/login', [UserController::class, 'login']);

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});

Route::post('/add_user', [UserController::class, 'addUser']);
Route::get('/home', [UserController::class, 'home']);


Route::controller(EmployeeController::class)->prefix('/employees')->group(function () {
    Route::get('/list', 'list');
    Route::get('/current', 'current');
    Route::get('/past', 'past');
    Route::get("/add_employee", [EmployeeController::class, 'addEmployee']);
    Route::post("/add_employee", [EmployeeController::class, 'addEmployee']);
});

Route::controller(EmployeeController::class)->prefix('/kin')->group(function () {
    Route::get('/list', 'list');
    Route::get('/current', 'current');
    Route::get('/past', 'past');
    Route::get("/add_employee", [EmployeeController::class, 'addEmployee']);
    Route::post("/add_employee", [EmployeeController::class, 'addEmployee']);
});

Route::controller(EmployeeController::class)->prefix('/employee_address')->group(function () {
    Route::get('/list', 'list');
    Route::get('/current', 'current');
    Route::get('/past', 'past');
    Route::get("/add_employee", [EmployeeController::class, 'addEmployee']);
    Route::post("/add_employee", [EmployeeController::class, 'addEmployee']);
});

Route::controller(EmployeeController::class)->prefix('/kin_address')->group(function () {
    Route::get('/list', 'list');
    Route::get('/current', 'current');
    Route::get('/past', 'past');
    Route::get("/add_employee", [EmployeeController::class, 'addEmployee']);
    Route::post("/add_employee", [EmployeeController::class, 'addEmployee']);
});

Route::controller(EmployeeController::class)->prefix('/employee_kin')->group(function () {
    Route::get('/list', 'list');
    Route::get('/current', 'current');
    Route::get('/past', 'past');
    Route::get("/add_employee", [EmployeeController::class, 'addEmployee']);
    Route::post("/add_employee", [EmployeeController::class, 'addEmployee']);
});

Route::get("/all_employees", [EmployeeController::class, 'list']);
Route::get("/current", [EmployeeController::class, 'current']);
Route::get("/past", [EmployeeController::class, 'former']);
