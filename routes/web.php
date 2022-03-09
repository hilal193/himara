<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController;

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

// Route::get('/', function () {
//     return view('home');
// })->name("home");

Route::get('/', [FrontController::class,"home"])->name('home');


// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::get('/admin/dashboard', [FrontController::class,"admin"])->middleware(["auth"])->name('dashboard');


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


// route par page admin
Route::get('/dashboard/room', function () {
    return view('admin.room.index');
})->middleware(['auth'])->name('room.index');

Route::get('/dashboard/staff', function () {
    return view('admin.staff.index');
})->middleware(['auth'])->name('staff.index');

Route::get('/dashboard/blog', function () {
    return view('admin.blog.index');
})->middleware(['auth'])->name('blog.index');

// Route::get('/dashboard/gallery', function () {
//     return view('admin.gallery.index');
// })->middleware(['auth'])->name('gallery.index');
Route::get('/dashboard/gallery', [GalleryController::class,"affichage"])->middleware(["auth"])->name('gallery.index');


Route::get('/dashboard/contact', function () {
    return view('admin.contact.index');
})->middleware(['auth'])->name('contact.index');

// affichage par page admin

