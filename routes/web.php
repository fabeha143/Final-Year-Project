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
Route::get('/login', [App\Http\Controllers\loginController::class, 'index'])->name('index');
Route::get('/index', [App\Http\Controllers\admindashController::class, 'index'])->name('index');

Route::get('/appointment', [App\Http\Controllers\appointmentController::class, 'index'])->name('index');
// Route::get('/patient', 'App\Http\Controllers\PatientController@index');
// Route::get('/patient', 'App\Http\Controllers\PatientController@create');


Route::resource('patient','PatientController');
Route::resource('doctor','doctorController');
Route::resource('employee','employeeController');
Route::resource('department','departmentController');
Route::resource('medicine','medicineController');
Route::resource('doseschedule','doseschedController');
Route::resource('schedule','scheduleController');

Route::get('/inbox', [App\Http\Controllers\mailController::class, 'index'])->name('index');
Route::get('/profile', [App\Http\Controllers\profileController::class, 'index'])->name('index');

//Doctor dashboard routes
Route::get('/doctordash', [App\Http\Controllers\doctordashController::class, 'index'])->name('index');
Route::get('/AppointmentList', [App\Http\Controllers\doctordashController::class, 'doc_appointment'])->name('doc_appointment');
Route::get('/writePrescription ', [App\Http\Controllers\doctordashController::class, 'prescription'])->name('prescription');
Route::get('/prescriptionList ', [App\Http\Controllers\doctordashController::class, 'prescriptionlist'])->name('prescriptionlist');

//Attendant dashboard routes
Route::get('/attendantdash ', [App\Http\Controllers\attendantdashController::class, 'index'])->name('index');
