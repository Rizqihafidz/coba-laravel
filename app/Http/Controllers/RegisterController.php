<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'register',
            'active' => 'register',
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns,rfc|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // $request->flash('success', 'Registrasi Berhasil! Silahkan lakukan login.');

        return redirect('/login')->with('success', 'Registrasi Berhasil! Silahkan lakukan login.');
    }
}
