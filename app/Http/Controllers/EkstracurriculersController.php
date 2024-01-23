<?php

namespace App\Http\Controllers;

use App\Models\Ekstracurriculer;
use Illuminate\Http\Request;

class EkstracurriculersController extends Controller
{
    public function ekstra(){
        return view('ekskul' , [
    'tittle' => 'Ekstracurriculer',
    'ekstracurriculer' => Ekstracurriculer::all(),
    ],);
    }
}
