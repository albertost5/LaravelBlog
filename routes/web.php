<?php

use Illuminate\Support\Facades\Route;

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
});


Route::get('/home/{name?}/{surname?}', function ($n = "Alberto", $s = "Sánchez") {

    // return view('home')
    //     ->with("name", $n)
    //     ->with("surname", $s);

    return view('home', [
        'name' => $n,
        'surname' => $s
    ]);
})->name("home");


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
