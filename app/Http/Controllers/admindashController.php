<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admindashController extends Controller
{
    public function index()
    {
        return view('AdminPanel/index');
    }
}
