<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Sekema_Perekrutan extends Controller
{
    public function data()
    {
        $Sekema = DB::table('as_sekema_prekrutan')->first();

        return view('Sekema-Perekrutan',['Sekema'=> $Sekema]);

    }
}
