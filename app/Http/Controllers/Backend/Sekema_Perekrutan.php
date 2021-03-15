<?php
namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Sekema_Perekrutan extends Controller
{
    public function data()
    {
        $sekema = DB::table('as_sekema_prekrutan')->get();
        // return $PPK;
        // dd($Siswa);
        return view('Backend.Sekema-Perekrutan.data',['sekema'=> $sekema]);

    }

    public function add()
    {
       
        return view('Backend.Sekema-Perekrutan.add');

    }

    public function addprosess(Request $request) 
    {
            // insert data ke table 
            if($request->hasFile('gambar')){
                $resorce       = $request->file('gambar');
                $name   = $resorce->getClientOriginalName();
                $resorce->move(\base_path() ."/public/assets/images/post", $name);
                $save =  DB::table('as_sekema_prekrutan')->insert([
                    'gambar' => $name
                        ]);
                return redirect('admin/Sekema-Perekrutan')->with('status', 'Data Berhasil Di Tambah!');

            }else{
                echo "Gagal upload gambar";
            }
                
	   
	// alihkan halaman ke halaman 
    // return $request;

    }

    public function edit($id) 
    {
        $sekema = DB::table('as_sekema_prekrutan')->where('id', $id)->first();
        // dd($PPK);
            return view('Backend.Sekema-Perekrutan.edit',compact('sekema'));
    }

    public function editprosess(Request $request , $id) 
    {

        if($request->hasFile('gambar')){
            $resorce       = $request->file('gambar');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/assets/images/post", $name);
            $save =  DB::table('as_sekema_prekrutan')
            ->where('id', $id)
            ->update([
                'gambar' => $name 
            ]);
            return redirect('admin/Sekema-Perekrutan')->with('status_edit', 'Data Berhasil Di Edit!');


        }else{
            echo "Gagal upload gambar";
        }
              

    }

    public function delete($id) 
    {
        DB::table('as_sekema_prekrutan')->where('id',$id)->delete();
        return redirect('admin/Sekema-Perekrutan')->with('status_hapus', 'Data Berhasil Di Hapus!');
    }


    
}
