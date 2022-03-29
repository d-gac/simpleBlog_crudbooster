<?php

namespace App\Http\Controllers;

use App\Http\Requests\UrlRequest;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function posts() {
        $posts = Post::with('category')->paginate(5);
        return $posts;
    }

    public function categories() {
        $categories = Category::with('post')->get();
        return view('category.categories', ['categories' => $categories]);
    }

    public function post($slug) {
        $posts = Post::where('slug', $slug)->with('category')->get();
        return view('post.post', ['posty' => $posts]);
    }

    public function category($slug) {
        $category = Category::where('slug', $slug)->with('post')->get();
        return view('category.category', ['categories' => $category]);
    }

    public function gallery() {
        $gallery = Gallery::all();
        return $gallery;
    }

    public function tescik(Request $request)
    {
        dd($request->get('City'), $request->get('Street'), $request->get('Nr'));
    }
}
