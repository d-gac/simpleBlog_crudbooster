<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::with('category')->paginate(5);
    return view('welcome', ['posts' => $posts]);
});
Route::get('/posts', [FrontController::class, 'posts']);
Route::get('/categories', [FrontController::class, 'categories']);
Route::get('/category/{slug}', [FrontController::class, 'category']);
Route::get('/post/{slug}', [FrontController::class, 'post']);
