<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Profil extends Controller
{
    public function data_latar_belakang()
    {
        $Profil = DB::table('as_latar_belakang')->first();

        return view('Profil-Latar-Belakang',['Profil'=> $Profil]);

    }

    public function data_Dasar_Pemikiran()
    {
        $Profil = DB::table('as_dasar_pemikiran')->first();

        return view('Profil-Dasar-Pemikiran',['Profil'=> $Profil]);

    }

    public function data_visi_misi_moto()
    {
        $Profil = DB::table('as_visi_misi_moto')->first();

        return view('Profil-visi-misi-moto',['Profil'=> $Profil]);

    }
}
