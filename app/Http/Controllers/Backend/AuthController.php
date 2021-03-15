<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function Login()
    {

        return view('BackEnd.login');

    }

    public function LoginProsess(Request $request)
    {
        // dd('ok');
        if (!\Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
            return redirect()->back()->with('status', 'Maaf Username / Password anda Salah !!');
        }
        return redirect()->route('Home');


        // return view('BackEnd.login');

    }

    public function Register()
    {

        return view('BackEnd.Register');

    }

    public function RegisterProsess(Request $request)
    {
        // dd('ok');
        // $this->validate($request, [
        //     'name'=>'required|min:4',
        //     'email'=>'required|email|unique:users',
        //     'password'=>'required|min:6|confirmed'
        // ]);
        User::create(['name'=>$request->name,
                      'email'=>$request->email,
                      'password'=>bcrypt($request->password)
        ]);
        return redirect()->back();

        return view('BackEnd.login');

    }

    public function Logout()
    {
        \Auth::logout();

        return redirect()->route('login');

    }



}
