<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::inRandomOrder()->paginate(10);
         return view('student/all',[
            "tittle" => "student",
            "students" => $students
        ]);
    }


    public function show(Student $student)
    {
        return view('student.detail', [
            "tittle" => "detail-student",
            "student" => $student 
        ]);
    }
    
    public function create()
    {
        return view('student.create', [
            "tittle" => "create-new-data",
            "kelas" =>Kelas::all()
            
        ]);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required',
            'kelas_id' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $result =Student::create($validateData);

        if($result){
            return redirect('/student')->with('success', "Data Siswa Berhasil Ditambahkan");
        }

    }

    public function destroy(Student $student){
        $result =Student::destroy($student->id);
        if($result){
            return redirect('/student')->with('success', "Data Siswa Berhasil Dihapus");
        }else {
            return redirect('/student')->with('fail', " Gagal menghapus data");
        }
    }
    public function edit(Student $student)
    {

        return view('student.edit', [
            "tittle" => "Edit-data",
            "student" => $student,
            "kelas" =>Kelas::all()
            
        ]);
        
    }  
    
    public function update(Student $student , Request $request){
        $validateData = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required',
            'kelas_id' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $result =Student::where('id', $student->id)->update($validateData);

        if($result){
            return redirect('/student')->with('success', "Data Siswa Berhasil Di ubah");
        }
    }

}