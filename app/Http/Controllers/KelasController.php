<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
         return view('grade/all',[
            "tittle" => "grade",
            "grades" => Kelas::all()
        ]);
    }


    public function create()
    {
        return view('grade.create', [
            "tittle" => "create-new-data",
            
            
        ]);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
        ]);

        $result =Kelas::create($validateData);

        if($result){
            return redirect('/grade')->with('success', "Data Siswa Berhasil Ditambahkan");
        }

    }

    public function destroy(Kelas $grade){
        $result =Kelas::destroy($grade->id);
        if($result){
            return redirect('/grade')->with('success', "Data Siswa Berhasil Dihapus");
        }else {
            return redirect('/grade')->with('fail', " Gagal menghapus data");
        }
    }
    public function edit(Kelas $grade)
    {

        return view('grade.edit', [
            "tittle" => "Edit-data",
            "grades" => $grade
            
        ]);
        
    }  
    
    public function update(Kelas $grade , Request $request){
        $validateData = $request->validate([
            
            'nama' => 'required',
          
        ]);

        $result =Kelas::where('id', $grade->id)->update($validateData);

        if($result){
            return redirect('/grade')->with('success', "Data Siswa Berhasil Di ubah");
        }
    }
}
