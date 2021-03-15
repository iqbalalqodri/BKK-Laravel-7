<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Lowongan_Pekerjaan extends Controller
{

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$BKK = DB::table('as_bkk')
		->where('judul','like',"%".$cari."%")
        ->paginate();
        
        $BKKDESC = DB::table('as_bkk')
                ->limit(3)
                ->orderBy('id_bkk', 'desc')
                ->get();
 
    		// mengirim data pegawai ke view index
		return view('Lowongan_Pekerjaan',['BKK' => $BKK],['BKKDESC' => $BKKDESC]);
 
	}

    public function data_bkk()
    {
        $BKK = DB::table('as_bkk')
                ->orderBy('id_bkk', 'desc')
                ->paginate(8);

        $BKKDESC = DB::table('as_bkk')
                ->limit(3)
                ->orderBy('id_bkk', 'desc')
                ->get();

        return view('Lowongan_Pekerjaan',['BKK'=> $BKK],['BKKDESC'=> $BKKDESC]);

    }

    public function data_bkk_single($id)
    {
        $BKK = DB::table('as_bkk')->where('id_bkk', $id)->first();

        $BKKDESC = DB::table('as_bkk')
        ->limit(3)
        ->orderBy('id_bkk', 'desc')
        ->get();
            return view('Single_Lowongan_Pekerjaan',compact('BKK','BKKDESC'));

    }


}