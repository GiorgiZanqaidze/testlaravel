<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminQuoteController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/posts/post', [PostController::class, 'index']);

Route::get('login', [AdminController::class, 'create'])->middleware('guest');
Route::post('login', [AdminController::class, 'store'])->middleware('guest');
Route::post('logout', [AdminController::class, 'destroy'])->middleware('auth');

Route::post('/quotes/quote/create', [AdminQuoteController::class, 'index'])->middleware('auth');
