<?php

namespace App\Http\Controllers;
use App\Models\Aparatur;

use Illuminate\Http\Request;

class AparaturController extends Controller
{
    public function index(){
        return view('aparatur', [
            'title' => 'Aparatur Desa',
            'active' => 'about',
            'name' => 'Desa Tumpakrejo',
            'aparaturs' => Aparatur::all()

        ]);
    }
}
