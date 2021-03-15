<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Kegiatan extends Controller
{
    public function data()
    {
        $Kegiatan = DB::table('as_kegiatan')->first();

        return view('kegiatan',['Kegiatan'=> $Kegiatan]);

    }
}
