<?php

use App\Models\Contact;
use App\Models\Gallery;
use App\Mail\ContactSender;
use App\Models\CategorieImage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CategorieImageController;

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
// Route::get('/pages/BlogPost', [FrontController::class,"blogPost"])->name('blogPost');
Route::get('/pages/{id}/BlogPost', [FrontController::class,"blogPost"])->name('blogLast');
// Route::get('/pages/BlogPost2', [FrontController::class,"blogPost2"])->name('blogPost2');
// Route::get('/pages/Comment', [FrontController::class,"comment"])->name('comment');
// Route::get('/pages/Service/home', [FrontController::class,"service"])->name('service');






// fonction recherche
Route::post('/search', [FrontController::class, "search"])->name('search');
// categorie id
Route::get('/pages/{id}/CategorieId', [FrontController::class,"searchCategorie"])->name('blogCategorie');
// //last par id
// Route::get('/pages/{id}/LastId', [FrontController::class,"tagCategorie"])->name('blogLast');

//tag id
Route::get('/pages/{id}/TAGId', [FrontController::class,"tagCategorie"])->name('tagCategorie');

// tag rooms id
Route::get('/pages/{id}/tagRoomsID', [FrontController::class,"tagRooms"])->name('tagRooms');
//category room
Route::get('/pages/Room/{id}/CategorieId', [FrontController::class,"searchRoomCategorie"])->name('roomCategorie');
// fonction recherche pour chambre
Route::post('/room/search', [FrontController::class, "RoomSearch"])->name('RoomSearch');


// route par page admin
Route::get('/dashboard/room', function () {
    return view('admin.room.index');
})->middleware(['auth'])->name('room.index');

// Route::get('/dashboard/staff', function () {
//     return view('admin.staff.index');
// })->middleware(['auth'])->name('staff.index');

Route::get('/dashboard/blog', function () {
    return view('admin.blog.index');
})->middleware(['auth'])->name('blog.index');

// Route::get('/dashboard/gallery', function () {
//     return view('admin.gallery.index');
// })->middleware(['auth'])->name('gallery.index');

// image
Route::get('/dashboard/gallery', [GalleryController::class,"affichage"])->middleware(["auth"])->name('gallery.index');
// categoryImage
Route::get('/dashboard/categoryImage/gallery', [CategorieImageController::class,"affichageCategoryImage"])->middleware(["auth"])->name('categoryImage.index');


// Route::get('/dashboard/contact', function () {
//     return view('admin.contact.index');
// })->middleware(['auth'])->name('contact.index');

// store pour le formulaire commentaire
Route::post("/{id}/commentaires", [CommentController::class,"store"]);
Route::delete("/comments/{id}/delete", [CommentController::class, "destroy"]);
Route::get("/comments/{id}/edit", [CommentController::class, "edit"]);
Route::put("/comments/{id}/update", [CommentController::class, "update"]);


// affichage par page admin

// Gallery crud
// create
route::get("/admin/Gallery/images/createImages",[GalleryController::class,"create"])->name("images.create");
// store
route::post("/admin/Gallery/images/storeImages",[GalleryController::class,"store"])->name("images.store");
// del
Route::delete('admin/Gallery/images/{image}/deleteimages', [GalleryController::class,"destroy"])->name("images.destroy");

// CategorieImage crud
// create
route::get("/admin/image/categoryImage/createss",[CategorieImageController::class,"create"])->name("categoryImage.create");
// store
route::post("/admin/images/categoryImage/storess",[CategorieImageController::class,"store"])->name("categoryImage.store");
// destroy
Route::delete('/admin/image/categoryImage/{categories}/deletecategoryImage', [CategorieImageController::class,"destroy"])->name("categoryImage.destroy");
// edit
route::get("/admin/image/categoryImage/{categories}/editindex",[CategorieImageController::class,"edit"])->name("categories.edit");
// update
route::put("/admin/image/categoryImage/{categories}/updateindex",[CategorieImageController::class,"update"])->name("categories.update");



// Team
Route::get('/dashboard/staff', [StaffController::class,"affichage"])->middleware(["auth"])->name('team.index');

// team crud
// create
route::get("/admin/staff/teams/createss",[StaffController::class,"create"])->name("teams.create");
// store
route::post("/admin/staff/teams/storess",[StaffController::class,"store"])->name("teams.store");
// destroy
Route::delete('/admin/staff/teams/{teams}/deleteTeams', [StaffController::class,"destroy"])->name("teams.destroy");
// edit
route::get("/admin/staf/teams/{teams}/editindex",[StaffController::class,"edit"])->name("teams.edit");
// update
route::put("/admin/staf/teams/{teams}/updateindex",[StaffController::class,"update"])->name("teams.update");

// Mail::to($contact->email,$contact->first_name)->send(new ContactMail($contact->first_name,$contact->msg));

Route::post('/mail/test/contact', [ContactController::class,"store"])->name('testmail');


// contact crud
// edit
route::get("/admin/contacts/info/{info}/editindex",[ContactController::class,"edit"])->name("contacts.edit");
// update
route::put("/admin/contacts/info/{info}/updateindex",[ContactController::class,"update"])->name("contacts.update");
//affichage
Route::get('/dashboard/contact', [ContactController::class,"affichage"])->middleware(["auth"])->name('contact.index');
// Route::get('/dashboard/contact', function () {
//     return view('admin.contact.index');
// })->middleware(['auth'])->name('contact.index');
