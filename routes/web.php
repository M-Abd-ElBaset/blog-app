<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
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

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'create']);
    Route::post('register', [RegisterController::class, 'store']);
    Route::get('login', [SessionsController::class, 'create'])->name('login');
    Route::post('login', [SessionsController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [SessionsController::class, 'destroy']);
});
