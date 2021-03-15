<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Password extends Controller
{
    public function data()
    {
        $Password = DB::table('users')->first();

        return view('Backend.Password',['Password'=> $Password]);

    }

    public function edit(Request $request , $id) 
    {

        
        $BKK = DB::table('users')
               ->where('id', $id)
               ->update([
                'name' =>  $request->nama,
                'email' => $request->email,
                'password' => Hash::make($request->Password)
               ]);
               return redirect('admin/Password')->with('status_edit', 'Data Berhasil Di Ubah!');

    }
}
