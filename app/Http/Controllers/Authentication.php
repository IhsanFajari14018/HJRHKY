<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\M_User;
use Session;

class Authentication extends Controller
{

    public function login()
    {
        return view('admin/login');
    }

    public function validateLogin(Request $request)
    {

        //retrieve
        $user = M_User::where('name', $request->name)->first();
        if (empty($user)) {
            //no user found
            Session::flash('error', 'User not found!');
            return redirect()->back();
        } else {
            //user found, lets verify the password
            $password = $user->password;
            $decrypted_password = $this->decrypt($password);

            if ($request->password == $decrypted_password) {
                $data = array(
                    "name" => $request->name,
                    "status" => "1"
                );
                Session::put('user', $data);
                return redirect('/dashboard');
            } else {
                Session::flash('error', 'Wrong password!');
                return redirect()->back();
            }
        }


        // // name = user who login | status 1 = valid, else is wrong

    }

    public function logout(){
        $data = array(
            "name" => "",
            "status" => "0"
        );
        Session::put('user', $data);
        return redirect('/login');

    }

    private function encrypt($string)
    {
        $encrypted = Crypt::encryptString($string);
        return $encrypted;
    }

    private function decrypt($string)
    {
        $decrypted = Crypt::decryptString($string);
        return $decrypted;
    }
}
