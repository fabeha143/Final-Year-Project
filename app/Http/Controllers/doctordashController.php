<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class doctordashController extends Controller
{
    public function index()
    {
        return view('DoctorDashboard/doctordash');
    }
    public function doc_appointment()
    {
        return view('DoctorDashboard/doc_appointment');
    }
    public function prescription()
    {
        return view('DoctorDashboard/write_prescription');
    }
    public function prescriptionlist()
    {
        return view('DoctorDashboard/prescription_list');
    }
}
    
