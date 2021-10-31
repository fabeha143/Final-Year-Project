<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceWebController extends Controller
{
    public function index()
    {
        return view('website/serviceweb');
    }
}
