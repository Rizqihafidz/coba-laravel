<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;


class BeritaController extends Controller
{
    public function index(){
        return view('artikel',[
            "title" => "Berita",
            "active" => "berita",
            "slug" => 'berita',
            "posts" => Berita::latest()->filter(request(['search']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Berita $post){
        return view("berita", [
            "title" => "Berita",
            "active" => 'berita',
            "post" => $post
        ]);
    }
}
