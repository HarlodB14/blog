<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('posts');
});

Route::get('posts/{post}', function ($slug) {

//    $path = __DIR__ . "/../resources/posts/{$slug}.html";

    $post = Post::find($slug);

    return view('post', [
        'post' => $post
    ]);


//    if (!file_exists($path)) {
//        return redirect('/');
//    }
//
//    $post = file_get_contents($path);
//
//    return view('post', [
//        'post' => $post
//    ]);
});

