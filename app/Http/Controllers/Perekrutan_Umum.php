<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Perekrutan_Umum extends Controller
{
    public function data()
    {
        $Perekrutan = DB::table('as_perekrutan')->first();

        return view('Perekrutan-Umum',['Perekrutan'=> $Perekrutan]);

    }
}
