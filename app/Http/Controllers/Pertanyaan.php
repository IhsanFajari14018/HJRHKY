<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\M_Pertanyaan;
use Illuminate\Http\Request;


class Pertanyaan extends Controller
{

    public function pertanyaan()
    {
        $questioner = M_Pertanyaan::all();
        return view('admin/pertanyaan', ['questioner' => $questioner]);
    }

    public function tanya()
    {
        return view('public/jawab');
    }

    public function doTanya(Request $request)
    {
        $questioner = new M_Pertanyaan;

        $questioner->name = $request->name;
        $questioner->email = $request->email;
        $questioner->question = $request->question;

        $questioner->save();
        echo "Submited!";
    }

    public function jawab()
    {
        return view('admin/jawab');
    }

    public function doJawab()
    {
        // return 
    }

    public function test()
    {
        echo "Tested.";
    }
}
