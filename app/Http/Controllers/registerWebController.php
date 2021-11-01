<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerWebController extends Controller
{
    public function index()
    {
        return view('website/register');
    }
}
