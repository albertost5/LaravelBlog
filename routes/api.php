<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\PostController;
use App\Http\Controllers\api\CategoryController;
// use App\Http\Controllers\api\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::resource('posts', PostController::class);
Route::resource('posts', App\Http\Controllers\api\PostController::class)->only(['index', 'show']);
Route::get('posts/{category}/category', [PostController::class, 'posts_categories'])->name('posts-categories.index');

Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/all', [CategoryController::class, 'all'])->name('categories.all');
