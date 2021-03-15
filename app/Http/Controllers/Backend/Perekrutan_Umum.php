<?php
namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Perekrutan_Umum extends Controller
{
    public function data()
    {
        $Perekrutan_Umum = DB::table('as_perekrutan')->get();
        // return $PPK;
        // dd($Siswa);
        return view('Backend.Perekrutan-Umum.data',['Perekrutan_Umum'=> $Perekrutan_Umum]);

    }

    public function add()
    {
       
        return view('Backend.Perekrutan-Umum.add');

    }

    public function addprosess(Request $request) 
    {
            // insert data ke table 

                $save =  DB::table('as_perekrutan')->insert([
                    
                    'judul' => $request->judul,
                    'konten' => $request->konten,
                        ]);
                return redirect('admin/Perekrutan-Umum')->with('status', 'Data Berhasil Di Tambah!');
	   
	// alihkan halaman ke halaman 
    // return $request;

    }

    public function edit($id) 
    {
        $Perekrutan_Umum = DB::table('as_perekrutan')->where('id', $id)->first();
        // dd($PPK);
            return view('Backend.Perekrutan-Umum.edit',compact('Perekrutan_Umum'));
    }

    public function editprosess(Request $request , $id) 
    {

        
        $BKK = DB::table('as_perekrutan')
               ->where('id', $id)
               ->update([
                   'judul' => $request->judul,
                   'konten' => $request->konten
               ]);
               return redirect('admin/Perekrutan-Umum')->with('status_edit', 'Data Berhasil Di Edit!');

    }

    public function delete($id) 
    {
        DB::table('as_perekrutan')->where('id',$id)->delete();
        return redirect('admin/Perekrutan-Umum')->with('status_hapus', 'Data Berhasil Di Hapus!');
    }


    
}
