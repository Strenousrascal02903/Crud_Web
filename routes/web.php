<?php

use App\Http\Controllers\EkstracurriculersController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;
use App\Models\Students;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|p
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home' , ['nama' => 'HomePage', 'tittle' => 'HomePage']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'About', 
    'tittle' => 'About',
    'nama' => 'Nabil Asshobieb',
    'kelas' => '11 PPLG 1',
    'foto' => 'images/gambar.jpg']);
});


Route::get('/ekstracurriculer', [EkstracurriculersController::class, 'ekstra']);

Route::group(["prefix"=>"/student"],function(){
    Route::get('/',[StudentController::class , 'index']);//view
    Route::get('/detail/{student}', [StudentController::class, 'show']);//detail data
    Route::get('/create',[StudentController::class , 'create']);//tambah data
    Route::post('/add',[StudentController::class , 'store']);//tambah data
    Route::delete('/delete/{student}',[StudentController::class , 'destroy']);//hapus data
    Route::get('/edit/{student}',[StudentController::class , 'edit']);//edit view
    Route::post('/update/{student}',[StudentController::class , 'update']);//edit data
});


Route::group(["prefix"=>"/grade"],function(){
    Route::get('/',[KelasController::class , 'index']);//view
    Route::get('/detail/{grade}', [KelasController::class, 'show']);//detail data
    Route::get('/create',[KelasController::class , 'create']);//tambah data
    Route::post('/add',[KelasController::class , 'store']);//tambah data
    Route::delete('/delete/{grade}',[KelasController::class , 'destroy']);//hapus data
    Route::get('/edit/{grade}',[KelasController::class , 'edit']);//edit view
    Route::post('/update/{grade}',[KelasController::class , 'update']);//edit data
});


