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

Route::get('/index', [App\Http\Controllers\admindashController::class, 'index'])->name('index');

Route::get('/appointment', [App\Http\Controllers\appointmentController::class, 'index'])->name('index');
// Route::get('/patient', 'App\Http\Controllers\PatientController@index');
// Route::get('/patient', 'App\Http\Controllers\PatientController@create');

Route::resource('patient','PatientController');
Route::resource('doctor','doctorController');
Route::resource('employee','employeeController');