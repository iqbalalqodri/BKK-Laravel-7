<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Institusi_Pasangan extends Controller
{
    public function data()
    {
        $institusi = DB::table('as_institusi_pasangan')->first();

        return view('Institusi-Pasangan',['institusi'=> $institusi]);

    }
}
