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
//    $config = [];
//    $config['to'] = 'nvm@com.pl';
//    $config['data'] = ['nic', 'nic nic nie', 'dsada'];
//    $config['template'] = 'testowy-mail';
//    \crocodicstudio\crudbooster\helpers\CB::sendEmail($config);

//    laravel mail working ok
//    $data = [
//        'var1' => '123',
//        'var2' => '321'
//    ];
//    \Illuminate\Support\Facades\Mail::to('ktostam@wp.pl')->send(new \App\Mail\MakePostEmail($data));

    $posts = FrontController::posts();
    $gallery = FrontController::gallery();

    return view('welcome', ['posts' => $posts, 'gallery' => $gallery]);
});
Route::get('/posts', [FrontController::class, 'posts']);
Route::get('/categories', [FrontController::class, 'categories']);
Route::get('/category/{slug}', [FrontController::class, 'category']);
Route::get('/post/{slug}', [FrontController::class, 'post']);

Route::get('/wyszukiwarka-1', [FrontController::class, 'tescik']);
