<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorWebController extends Controller
{
    public function index()
    {
        return view('website/doctorweb');
    }
    public function detail()
    {
        return view('website/doctorwebDetail');
    }
}
