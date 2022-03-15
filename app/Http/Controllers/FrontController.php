<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function posts() {
        $posts = Post::with('category')->get();
        return view('post.posts', ['posts' => $posts]);
    }

    public function categories() {
        $categories = Category::with('post')->get();
        return view('post.posts', ['categories' => $categories]);
    }

    public function post($slug) {
        $posts = Post::where('slug', $slug)->with('category')->get();
        return view('post.post', ['posty' => $posts]);
    }

    public function category($slug) {
        $categories = Category::where('slug', $slug)->with('post')->get();
        return view('category.categories', ['categories' => $categories]);
    }
}
