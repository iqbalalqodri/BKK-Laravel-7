<?php
namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Visi_Misi_Moto extends Controller
{
    public function data()
    {
        $Profil = DB::table('as_visi_misi_moto')->get();
        // return $PPK;
        // dd($Siswa);
        return view('Backend.Profil.Visi-Misi-Moto.data',['Profil'=> $Profil]);

    }


    public function edit($id) 
    {
        $Profil = DB::table('as_visi_misi_moto')->where('id', $id)->first();
        // dd($PPK);
            return view('Backend.Profil.Visi-Misi-Moto.edit',compact('Profil'));
    }

    public function editprosess(Request $request , $id) 
    {

        
        $BKK = DB::table('as_visi_misi_moto')
               ->where('id', $id)
               ->update([
                   'judul' => $request->judul,
                   'konten' => $request->konten
               ]);
               return redirect('admin/Profil-Visi-Misi-Moto')->with('status_edit', 'Data Berhasil Di Edit!');

    }

    public function delete($id) 
    {
        DB::table('as_visi_misi_moto')->where('id',$id)->delete();
        return redirect('admin/Profil-Visi-Misi-Moto')->with('status_hapus', 'Data Berhasil Di Hapus!');
    }


    
}
