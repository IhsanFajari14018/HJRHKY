<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Session;
use App\Answers;
use App\Questions;

class Pertanyaan extends Controller
{

    public function pertanyaan()
    {
        $questioner = Questions::orderBy('id', 'desc')->get();

        // foreach ($questioner as $value) {
        //     echo $value->id." - ";
        //     echo $value->question."<br>";
        //     if(!isset($value->answers->answer)){
        //         echo "NULL";
        //     }else{
        //         echo $value->answers->answer;
        //     }
        //     echo "<br><br>";
        // }

        return view('admin/pertanyaan', ['questioner' => $questioner]);
    }

    public function tanya()
    {
        return view('public/tanya');
    }

    public function doTanya(Request $request)
    {
        $questioner = new Questions;

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
        $question = Questions::find($id);
        return view('admin/jawab', ['question' => $question]);
    }

    public function jawaban()
    {
        $question = Questions::with('answers')->has('answers')->get();
        return view('admin/jawaban', ['question' => $question]);
    }

    public function doJawab(Request $request, $id)
    {
        $answer = new Answers();

        $answer->answer = $request->editordata;
        $answer->questions_id = $id;

        $answer->save();

        //set session
        $this->setResponse('sukses');

        return redirect('/dashboard/pertanyaan');
    }

    /**
     * Using soft deletes
     */
    public function hapus($id)
    {
        $questioner = Questions::find($id);
        $questioner->delete();

        return redirect()->back();
    }

    public function test()
    {
        echo "Tested.";
    }
}
