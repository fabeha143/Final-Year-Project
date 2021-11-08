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

//login
Route::get('/loginA', [App\Http\Controllers\loginController::class, 'index'])->name('index');
Route::view('/forgetpassword', 'forgetpass');


//Admin
Route::get('/index', [App\Http\Controllers\admindashController::class, 'index'])->name('index');
Route::get('/appointment', [App\Http\Controllers\appointmentController::class, 'index'])->name('index');
Route::resource('patient','PatientController');
Route::resource('doctor','doctorController');
Route::resource('employee','employeeController');
Route::resource('employeeRole','employee_role_controller');
Route::resource('department','departmentController');
Route::resource('medicine','medicineController');
Route::resource('doseschedule','doseschedController');
Route::resource('schedule','scheduleController');
Route::resource('medicinesCategory','med_cat_controller');

//Mail
Route::get('/profile', [App\Http\Controllers\profileController::class, 'index'])->name('index');
//profile
Route::get('/inbox', [App\Http\Controllers\mailController::class, 'index'])->name('index');

//Doctor dashboard routes
Route::get('/doctordash', [App\Http\Controllers\doctordashController::class, 'index'])->name('index');
Route::get('/AppointmentList', [App\Http\Controllers\doctordashController::class, 'doc_appointment'])->name('doc_appointment');
Route::get('/writePrescription ', [App\Http\Controllers\doctordashController::class, 'prescription'])->name('prescription');
Route::get('/prescriptionList ', [App\Http\Controllers\doctordashController::class, 'prescriptionlist'])->name('prescriptionlist');

//Attendant dashboard routes
Route::get('/attendantdash ', [App\Http\Controllers\attendantdashController::class, 'index'])->name('index');

//Website Routes
Route::view('/home ', 'website/homepage');
Route::view('/Department ', 'website/departmentweb');
Route::view('/service ', 'website/serviceweb');
Route::view('/Doctor ', 'website/doctorweb');
Route::view('/DoctorDetail ', 'website/doctorwebDetail');
Route::view('/contactus ', 'website/contactus');
Route::view('/Appointment ', 'website/appointmentweb');
Route::view('/faq ', 'website/faqWeb');
Route::view('/loginpatient ', 'website/loginweb');
Route::view('/forgetpasswordp ', 'website/forgetpassweb');
Route::view('/register ', 'website/register');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
