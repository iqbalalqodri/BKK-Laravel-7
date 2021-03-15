<?php
namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Kontak extends Controller
{
    public function data()
    {
        $Kontak = DB::table('as_kontak')->get();
        // return $PPK;
        // dd($Siswa);
        return view('Backend.Kontak.data',['Kontak'=> $Kontak]);

    }

    public function add()
    {
       
        return view('Backend.Kontak.add');

    }

    public function addprosess(Request $request) 
    {
            // insert data ke table 

                $save =  DB::table('as_kontak')->insert([
                    'Hp' => $request->Hp,
                    'email' => $request->email,
                        ]);
                return redirect('admin/Kontak')->with('status', 'Data Berhasil Di Tambah!');
	   
	// alihkan halaman ke halaman 
    // return $request;

    }

    public function edit($id) 
    {
        $Kontak = DB::table('as_kontak')->where('id', $id)->first();
        // dd($PPK);
            return view('Backend.Kontak.edit',compact('Kontak'));
    }

    public function editprosess(Request $request , $id) 
    {

        
        $BKK = DB::table('as_kontak')
               ->where('id', $id)
               ->update([
                   'Hp' => $request->Hp,
                   'email' => $request->email
               ]);
               return redirect('admin/Kontak')->with('status_edit', 'Data Berhasil Di Edit!');

    }

    public function delete($id) 
    {
        DB::table('as_kontak')->where('id',$id)->delete();
        return redirect('admin/Kontak')->with('status_hapus', 'Data Berhasil Di Hapus!');
    }


    
}
