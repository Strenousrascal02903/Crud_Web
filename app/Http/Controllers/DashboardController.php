<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\kelas;
use App\Models\Students;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
  public function index(Request $request)
  {
    
      $isFilterByNameChecked = session('filterByName', false);
  
      if ($isFilterByNameChecked) {
          $students = Student::orderBy('nama', 'asc')->paginate(10);
      } else {
          $students = Student::inRandomOrder()->paginate(10);
      }
  
      return view('dashboard/student/all', [
          "tittle" => "Dashboard",
          "students" => $students,
          'isFilterByNameChecked' => $isFilterByNameChecked
      ]);
  }
  public function search(Request $request)
{
    $search = $request->input('search');

    $students = Student::where('nama', 'like', '%'.$search.'%')
                        ->orWhere('nis', 'like', '%'.$search.'%')
                        ->orWhereHas('kelas', function($query) use ($search) {
                            $query->where('nama', 'like', '%'.$search.'%');
                        })
                        ->paginate(10);
                        if ($students->isEmpty()) {
                          session()->flash('not_found', 'Data tidak ditemukan.');
                          // Kode untuk mengembalikan data acak lagi dan mengosongkan form pencarian
                          $students = Student::inRandomOrder()->paginate(10);
                          return redirect()->back()->withInput()->with(['students' => $students]);
                      }
                      
    return view('dashboard/student/all', [
        "tittle" => "Dashboard",
        'students' => $students,
        'isFilterByNameChecked' => false, // Atau sesuaikan dengan kondisi Anda
    ]);
}

  
  public function filterByName(Request $request) 
  {
      
      if ($request->has('filterByName')) {
          session(['filterByName' => true]);
      } else {
          session()->forget('filterByName');
      }
  
      return redirect('/dashboard/student');
  }

  public function show(Student $student)
  {
      return view('dashboard.student.detail', [
          "tittle" => "detail-student",
          "student" => $student 
      ]);
  }


  public function create(Student $student) 
  {
    return view('dashboard.student.create', [
      "tittle" => "AddData-students",
      "grades" => kelas::all()
    ]);
}



public function store(Request $request)
{
  $validatedData = $request->validate([
    'id' => 'AUTO INCREMENT',
    'nis' => 'required|max:225',
    'nama' => 'required|max:225',
    'kelas_id' => 'required',
    'tgl_lahir' => 'required',
    'alamat' => 'required',
]);

$result = Student::create($validatedData);

if ($result) {
    return redirect('/dashboard/student')->with('success', 'Data siswa berhasil ditambahkan');
}
}

public function destroy(Student $student)
{
    $result = Student::destroy($student->id);

    if ($result) {
      return redirect('/dashboard/student')->with('success', 'Data siswa berhasil dihapus');
    }
}

public function edit(Student $student)  
  {
    return view('dashboard.student.edit', [
      "tittle" => "Ediy-students",
      "student" => $student,
      "grades" => kelas::all(),
    ]);
}

public function update(Request $request, Student $student) {

  $validatedData = $request->validate([
    'id' => 'AUTO INCREMENT',
    'nis' => 'required|max:225',
    'nama' => 'required|max:225',
    'kelas_id' => 'required',
    'tgl_lahir' => 'required',
    'alamat' => 'required',
]);

$result = Student::where('id', $student->id)->update($validatedData);

if ($result) {
    return redirect('/dashboard/student')->with('success', 'Data siswa berhasil diubah');
} 

}
public function indexKelas(Request $request)
{
    // Mendapatkan status filter dari session
    $isFilterByNameChecked = session('filterKelasByName', false);

    // Jika filter dipilih, urutkan kelas berdasarkan nama; jika tidak, urutkan secara acak
    if ($isFilterByNameChecked) {
        $grades = kelas::orderBy('nama', 'asc')->paginate(10);
    } else {
        $grades = kelas::inRandomOrder()->paginate(10);
    }
    

    return view('/dashboard/grade/all', [
        "tittle" => "kelas",
        "grades" => $grades,
        'isFilterByNameChecked' => $isFilterByNameChecked
    ]);
}

public function filterKelasByName(Request $request) 
{
    // Mengatur status filter berdasarkan checkbox
    if ($request->has('filterByName')) {
        session(['filterKelasByName' => true]);
    } else {
        session()->forget('filterKelasByName');
    }

    // Mengarahkan kembali ke halaman indeks
    return redirect('/dashboard/kelas');
}



public function createKelas(kelas $class) 
   {
    
        return view('/dashboard/grade/create', [
            "tittle" => "AddData-Kelas",
            "grades" => $class
        ]);
    
  }

public function storeKelas(Request $request)
{
  $validatedData = $request->validate([
    'id' => 'AUTO INCREMENT',
    'nama' => 'required|max:225',
]);

$result = kelas::create($validatedData);

if ($result) {
    return redirect('/dashboard/kelas')->with('success', 'Data kelas berhasil ditambahkan');
} 

  }

  public function destroyKelas(kelas $kelas)
  {
      $result = $kelas->delete();
  
      if ($result) {
          return redirect('/dashboard/kelas')->with('success', 'Data kelas berhasil dihapus');
      }
  }


  public function editKelas(kelas $kelas) 
  {
    return view('dashboard.grade.edit', [
      "tittle" => "edit-kelas",
      "kelas" => $kelas
    ]);
}

public function updateKelas(Request $request, kelas $kelas) {

    $validatedData = $request->validate([
      'nama' => 'required|max:225',
  ]);
  
  $result = kelas::where('id', $kelas->id)->update($validatedData);
  
  if ($result) {
      return redirect('/dashboard/kelas')->with('success', 'Data kelas berhasil diubah');
  } 
  
  }
}