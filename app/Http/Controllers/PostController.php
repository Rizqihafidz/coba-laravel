<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{
    public function index(){

        $title = '';

        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $category = User::firstWhere('username', request('author'));
            $title = ' from ' . $category->name;
        }

        return view('posts',[
            "title" => "Berita" . $title,
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view("post", [
            "title" => "Single Post",
            "active" => 'post',
            "post" => $post
        ]);
    }
}
