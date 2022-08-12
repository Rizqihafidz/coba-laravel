<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Potensi;

class PotensiController extends Controller
{
    public function index(){

        return view('artikel',[
            "title" => "Potensi Desa",
            "active" => 'artikel',
            "slug" => 'potensi',
            "posts" => Potensi::latest()->filter(request(['search']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Potensi $post){
        return view("artikel.potensi", [
            "title" => "Potensi",
            "active" => 'artikel',
            "post" => $post
        ]);
    }


}
