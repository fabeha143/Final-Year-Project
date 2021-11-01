<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forgetpassWebController extends Controller
{
    public function index()
    {
        return view('website/forgetpassweb');
    }
}
