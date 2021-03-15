<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Kontak extends Controller
{


    public function data()
    {
        $Kontak = DB::table('as_kontak')->first();

        return view('kontak',['Kontak'=> $Kontak]);

    }
}