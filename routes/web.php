<?php

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
    return view('home');
})->name("home");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Mon front
Route::get('/pages/Room', [FrontController::class,"room"])->name('room');
Route::get('/pages/RoomsList', [FrontController::class,"roomslist"])->name('roomslist');
Route::get('/pages/Blog', [FrontController::class,"blog"])->name('blog');
Route::get('/pages/Gallery', [FrontController::class,"gallery"])->name('gallery');
Route::get('/pages/Events', [FrontController::class,"events"])->name('events');
Route::get('/pages/EventDetails', [FrontController::class,"eventdetails"])->name('eventdetails');
Route::get('/pages/Staff', [FrontController::class,"staff"])->name('staff');
Route::get('/pages/Loading', [FrontController::class,"loading"])->name('loading');
Route::get('/pages/Contact', [FrontController::class,"contact"])->name('contact');
