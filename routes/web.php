<?php

use App\Http\Controllers\Blog\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\Blog\PostUserController;
use App\Http\Controllers\Blog\TagController;

use GuzzleHttp\Middleware;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('dashboard', [PagesController::class, 'dashboards'])->name('dashboard');

    Route::resource('posts', PostController::class)
	->names('posts');

    Route::resource('categories', CategoryController::class)
	->names('categories');

    Route::resource('tags', TagController::class)
	->names('tags');

    //rutas usuario
    Route::get('user_posts', [PostUserController::class, 'index'])->name('user_posts');
    Route::get('user_recipes', [PostUserController::class, 'recipes'])->name('user_recipes');
});

