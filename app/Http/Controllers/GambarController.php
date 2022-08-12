<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gambar;

class GambarController extends Controller
{
    public function index()
    {
        return view('album', [
            'title' => 'Galeri',
            'active' => 'galeri',
            'name' => 'Desa Tumpakrejo',
            'albums' => Gambar::all()
        ]);
    }
}
