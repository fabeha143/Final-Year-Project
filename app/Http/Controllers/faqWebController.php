<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class faqWebController extends Controller
{
    public function index()
    {
        return view('website/faqWeb');
    }
}
