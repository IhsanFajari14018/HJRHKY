<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class Admin extends Controller
{

    /**
     * Restricted, only authorized user, by performing login
     */
    public function __construct()
    { }

    public function index()
    {
        //
    }


    /*
    * Main dashboard
    */
    public function dashboard()
    {
        if (Session::get('user')['status'] != 1) {
            return redirect('/login');
        }
        return view('admin/dashboard');
    }
}
