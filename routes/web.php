<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
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
Route::get('/movies/{movie:slug}', [HomeController::class, 'show']);

Route::get('login', [AdminController::class, 'create'])->middleware('guest');
Route::post('login', [AdminController::class, 'store'])->middleware('guest');
Route::post('logout', [AdminController::class, 'destroy'])->middleware('auth');
Route::get('dashboard', [AdminController::class, 'show'])->middleware('auth');

Route::get('movies/movie/create', [AdminQuoteController::class, 'index'])->middleware('auth');
Route::post('movies/movie/create', [AdminQuoteController::class, 'create'])->middleware('auth');
Route::get('movies/movie/{movie:slug}/edit', [AdminQuoteController::class, 'show'])->middleware('auth');
Route::patch('movies/movie/{movie:slug}/edit', [AdminQuoteController::class, 'edit'])->middleware('auth');
Route::delete('movies/movie/{movie:slug}/delete', [AdminQuoteController::class, 'delete'])->middleware('auth');
