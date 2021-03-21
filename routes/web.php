<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\PostController;
use App\Http\Controllers\dashboard\CategoryController;

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
    return view('welcome');
})->name('welcome');


// Route::get('/home/{name?}/{surname?}', function ($n = "Alberto", $s = "Sánchez") {

//     // return view('home')
//     //     ->with("name", $n)
//     //     ->with("surname", $s);

//     return view('home', [
//         'name' => $n,
//         'surname' => $s
//     ]);
// })->name("home");


// Route::get(uri, callback {
//     return view('view name');
// })->name(named route);


Route::get('/loop', function () {
    $posts = ["post1", "post2", "post3", "post4"];
    $posts2 = [];

    return view('loopfor', [
        'postarray' => $posts,
        'emptyarray' => $posts2
    ]);
});

// Route::get('post', [PostController::class, 'index']);
// Route::get('posts', [App\Http\Controllers\PostController::class, 'index']);
// Si lo hacemos de esta forma, como una ruta absoluta, no es necesario hacer el import



Route::resource('dashboard/post', PostController::class);
Route::resource('dashboard/category', CategoryController::class);

Route::post('dashboard/post/{post}/image', [PostController::class, 'image'])->name('post.image');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
