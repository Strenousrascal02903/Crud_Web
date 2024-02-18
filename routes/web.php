<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EkstracurriculersController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'auth']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);

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

Route::group(['prefix' => "/dashboard"], function(){
   
    Route::get('/student', [dashboardController::class, "index"])->middleware('auth');
    Route::get('/student/detail/{student}', [dashboardController::class, "show"])->middleware('auth');
 
    Route::get('/create', [dashboardController::class, "create"])->middleware('auth');
    Route::post('/add', [dashboardController::class, "store"])->middleware('auth');
    Route::delete('/delete/{student}',[dashboardController::class,"destroy"])->middleware('auth');
    Route::get('/student/edit/{student}', [dashboardController::class, "edit"])->middleware('auth');
    Route::post('/update/{student}', [dashboardController::class, "update"])->middleware('auth');


    Route::get('/kelas', [dashboardController::class, "indexKelas"])->middleware('auth');
    Route::get('/tambahKelas', [dashboardController::class, "createKelas"])->middleware('auth');
    Route::post('/addKelas', [dashboardController::class, "storeKelas"])->middleware('auth');
    Route::delete('/deleteKelas/{kelas}',[dashboardController::class,"destroyKelas"])->middleware('auth');
    Route::get('/editKelas/{kelas}', [dashboardController::class, "editKelas"])->middleware('auth');
    Route::post('/updateKelas/{kelas}', [dashboardController::class, "updateKelas"])->middleware('auth');
});
