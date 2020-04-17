<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{

    public function index()
    {
    
    }


    /*
    * Main dashboard
    */
    public function dashboard()
    {
        return view('admin/dashboard');
    }
}
