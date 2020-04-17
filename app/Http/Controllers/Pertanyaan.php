<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pertanyaan extends Controller
{

    public function pertanyaan()
    {
        return view('admin/pertanyaan');
    }
}
