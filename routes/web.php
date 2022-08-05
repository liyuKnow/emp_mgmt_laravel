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

Route::post('/add_user', [UserController::class, 'addUser'])->name('add_user');
Route::get('/home', [UserController::class, 'home']);
Route::post('edit_user/{id}', [UserController::class, 'editUser'])->name('edit_user');
Route::delete('/delete_user/{id}', [UserController::class, 'deleteUser'])->name('delete_user');


Route::controller(EmployeeController::class)->prefix('/employees')->group(function () {
    Route::get('/list', 'list');
    Route::get('/current', 'current');
    Route::get('/past', 'former');
    Route::get('/detail/{id}', 'detail');

    Route::get("/create", [EmployeeController::class, 'create'])->name('add_employee');
    Route::post("/store", [EmployeeController::class, 'store'])->name('store_employee');

    Route::get("/edit", [EmployeeController::class, 'edit']);
    Route::post("/update", [EmployeeController::class, 'update']);

    Route::get("/delete", [EmployeeController::class, 'delete']);
});
