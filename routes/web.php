<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\employeeController::class, 'index'])->name('admin');

Route::get('/employee-create/{user_id}', [App\Http\Controllers\employeeController::class, 'edit'])->name('edit-employee');

Route::put('/employee-update/{user_id}', [App\Http\Controllers\employeeController::class, 'update'])->name('update-employee');

Route::delete('/employee-delete/{user_id}', [App\Http\Controllers\employeeController::class, 'delete'])->name('delete-employee');



