<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    //middleware(['auth']);
    //Laravel Pre-build Authentication Middleware to prevent someone to accessing a page like Dashboard without Login


    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {   
        // dd(auth()->user());
        return view('dashboard');
    }
}
