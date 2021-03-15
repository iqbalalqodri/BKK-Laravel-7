<?php
namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Dasar_Pemikiran extends Controller
{
    public function data()
    {
        $Profil = DB::table('as_dasar_pemikiran')->get();
        // return $PPK;
        // dd($Siswa);
        return view('Backend.Profil.Dasar-Pemikiran.data',['Profil'=> $Profil]);

    }


    public function edit($id) 
    {
        $Profil = DB::table('as_dasar_pemikiran')->where('id', $id)->first();
        // dd($PPK);
            return view('Backend.Profil.Dasar-Pemikiran.edit',compact('Profil'));
    }

    public function editprosess(Request $request , $id) 
    {

        
        $BKK = DB::table('as_dasar_pemikiran')
               ->where('id', $id)
               ->update([
                   'judul' => $request->judul,
                   'konten' => $request->konten
               ]);
               return redirect('admin/Profil-Dasar-Pemikiran')->with('status_edit', 'Data Berhasil Di Edit!');

    }

    public function delete($id) 
    {
        DB::table('as_dasar_pemikiran')->where('id',$id)->delete();
        return redirect('admin/Profil-Dasar-Pemikiran')->with('status_hapus', 'Data Berhasil Di Hapus!');
    }


    
}
