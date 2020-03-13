<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pertanyaan_C extends Controller
{

    public function list_admin()
    {
        return view('admin/pertanyaan');
    }
}
