<?php

use App\Http\Controllers\Blog\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Blog\PostController;

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
});

