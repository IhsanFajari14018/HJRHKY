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
        foreach ($questioner as $q ) {
            echo $q->name;
            echo "<br>";
            echo $q->email;
            echo "<br>";
            echo $q->pertanyaan;
            echo "<br>";
        }

        // return view('admin/pertanyaan');
    }

    public function doTanya()
    {
        $questioner = new M_Pertanyaan;

        $questioner->name = 'Oji';
        $questioner->email = '0jhunt@hotmail.com';
        $questioner->pertanyaan = "Cara biar ga dibully mantan gimana ustadz??";

        $questioner->save();
        echo "Submited!";
    }

    public function jawab()
    {
        return view('admin/jawab');
    }

    public function doJawab()
    {
        
    }

    public function test()
    {
        echo "Tested.";
    }
}
