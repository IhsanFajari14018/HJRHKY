<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\M_Pertanyaan;
use Illuminate\Http\Request;
use Session;


class Pertanyaan extends Controller
{

    public function pertanyaan()
    {
        $questioner = M_Pertanyaan::orderBy('id', 'desc')->get();
        return view('admin/pertanyaan', ['questioner' => $questioner]);
    }

    public function tanya()
    {
        return view('public/tanya');
    }

    public function doTanya(Request $request)
    {
        $questioner = new M_Pertanyaan;

        $questioner->name = $request->name;
        $questioner->email = $request->email;
        $questioner->question = $request->question;

        $questioner->save();

        //set session
        $this->setResponse('sukses');

        return redirect('/ask');
    }

    private function setResponse($response)
    {
        if ($response == 'sukses') {
            Session::flash('sukses', 'Pertanyaan Anda sudah kami terima. Terimakasih!');
        } else {
            //wrong $response
        }
    }

    public function jawab($id)
    {
        // $questioner = M_Pertanyaan::find('id')->get();

        return view('admin/jawab');
    }

    public function doJawab()
    {
        // $questioner = M_Pertanyaan::find('id')->get();

        // return 
    }

    /**
     * Using soft deletes
     */
    public function hapus($id)
    {
        $questioner = M_Pertanyaan::find($id);
        $questioner->delete();

        return redirect()->back();
    }

    public function test()
    {
        echo "Tested.";
    }
}
