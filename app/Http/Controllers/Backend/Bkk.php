<?php
namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Bkk extends Controller
{
    public function data()
    {
        $BKK = DB::table('as_bkk')->get();
        // return $PPK;
        // dd($Siswa);
        return view('Backend.BKK.data',['BKK'=> $BKK]);

    }

    public function add()
    {
       
        return view('Backend.BKK.add');

    }

    public function addprosess(Request $request) 
    {
            // insert data ke table 
            if($request->hasFile('gambar')){
                $resorce       = $request->file('gambar');
                $name   = $resorce->getClientOriginalName();
                $resorce->move(\base_path() ."/public/assets/images/post", $name);
                $save =  DB::table('as_bkk')->insert([
                    'gambar' => $name,
                    'judul' => $request->judul,
                    'konten' => $request->konten,
                    'tanggal' => $request->tanggal,
                        ]);
                return redirect('admin/BKK')->with('status', 'Data Berhasil Di Tambah!');

            }else{
                echo "Gagal upload gambar";
            }
	   
	// alihkan halaman ke halaman 
    // return $request;

    }

    public function edit($id) 
    {
        $BKK = DB::table('as_bkk')->where('id_bkk', $id)->first();
        // dd($PPK);
            return view('Backend.BKK.edit',compact('BKK'));
    }

    public function editprosess(Request $request , $id) 
    {

        if($request->hasFile('gambar')){
            $resorce       = $request->file('gambar');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/assets/images/post", $name);
        $BKK = DB::table('as_bkk')
               ->where('id_bkk', $id)
               ->update([
                   'gambar' =>$name,
                   'judul'  => $request->judul,
                   'konten' => $request->konten
               ]);
               return redirect('admin/BKK')->with('status_edit', 'Data Berhasil Di Edit!');

            }else{
                echo "Gagal upload gambar";
            }

    }

    public function delete($id) 
    {
        DB::table('as_bkk')->where('id_bkk',$id)->delete();
        return redirect('admin/BKK')->with('status_hapus', 'Data Berhasil Di Hapus!');
    }


    
}
