<?php
namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Kegiatan extends Controller
{
    public function data()
    {
        $Kegiatan = DB::table('as_kegiatan')->get();
        // return $PPK;
        // dd($Siswa);
        return view('Backend.Kegiatan.data',['Kegiatan'=> $Kegiatan]);

    }

    public function add()
    {
       
        return view('Backend.Kegiatan.add');

    }

    public function addprosess(Request $request) 
    {
            // insert data ke table 

                $save =  DB::table('as_kegiatan')->insert([
                    
                    'judul' => $request->judul,
                    'konten' => $request->konten,
                        ]);
                return redirect('admin/Kegiatan')->with('status', 'Data Berhasil Di Tambah!');
	   
	// alihkan halaman ke halaman 
    // return $request;

    }

    public function edit($id) 
    {
        $Kegiatan = DB::table('as_kegiatan')->where('id', $id)->first();
        // dd($PPK);
            return view('Backend.Kegiatan.edit',compact('Kegiatan'));
    }

    public function editprosess(Request $request , $id) 
    {

        
        $BKK = DB::table('as_kegiatan')
               ->where('id', $id)
               ->update([
                   'judul' => $request->judul,
                   'konten' => $request->konten
               ]);
               return redirect('admin/Kegiatan')->with('status_edit', 'Data Berhasil Di Edit!');

    }

    public function delete($id) 
    {
        DB::table('as_kegiatan')->where('id',$id)->delete();
        return redirect('admin/Kegiatan')->with('status_hapus', 'Data Berhasil Di Hapus!');
    }


    
}
