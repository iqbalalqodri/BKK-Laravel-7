<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Home extends Controller
{


    public function data_home()
    {
        $BKK = DB::table('as_bkk')
                ->limit(6)
                ->orderBy('id_bkk', 'desc')

                ->get();

        $BKKDESC = DB::table('as_bkk')
                ->limit(3)
                ->orderBy('id_bkk', 'desc')
                ->get();
        // return $PPK;
        // dd($Siswa);
        return view('home',['BKK'=> $BKK],['BKKDESC'=> $BKKDESC]);

    }


}