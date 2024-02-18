<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
         return view('register.index',[
            "tittle" => "Register",
           
        ]);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            
            'name' => 'required|max:255',

            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:20',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success', "Berhasil mendaftar, silahkan login");

 
        

    }
}
