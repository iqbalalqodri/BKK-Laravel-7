<?php
namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Institusi_Pasangan extends Controller
{
    public function data()
    {
        $Institusi = DB::table('as_institusi_pasangan')->get();
        // return $PPK;
        // dd($Siswa);
        return view('Backend.Institusi-Pasangan.data',['Institusi'=> $Institusi]);

    }

    public function add()
    {
       
        return view('Backend.Institusi-Pasangan.add');

    }

    public function addprosess(Request $request) 
    {
            // insert data ke table 

                $save =  DB::table('as_institusi_pasangan')->insert([
                    
                    'judul' => $request->judul,
                    'konten' => $request->konten,
                        ]);
                return redirect('admin/Institusi-Pasangan')->with('status', 'Data Berhasil Di Tambah!');
	   
	// alihkan halaman ke halaman 
    // return $request;

    }

    public function edit($id) 
    {
        $Institusi = DB::table('as_institusi_pasangan')->where('id', $id)->first();
        // dd($PPK);
            return view('Backend.Institusi-Pasangan.edit',compact('Institusi'));
    }

    public function editprosess(Request $request , $id) 
    {

        
        $BKK = DB::table('as_institusi_pasangan')
               ->where('id', $id)
               ->update([
                   'judul' => $request->judul,
                   'konten' => $request->konten
               ]);
               return redirect('admin/Institusi-Pasangan')->with('status_edit', 'Data Berhasil Di Edit!');

    }

    public function delete($id) 
    {
        DB::table('as_institusi_pasangan')->where('id',$id)->delete();
        return redirect('admin/Institusi-Pasangan')->with('status_hapus', 'Data Berhasil Di Hapus!');
    }


    
}
