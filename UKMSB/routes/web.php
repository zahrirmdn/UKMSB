<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;

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
    return view('pages/home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('pages/about', [
        "title" => "About"
    ]);
});

Route::get('/achievement', function () {
    return view('pages/achievement', [
        "title" => "achievement"
    ]);
});

Route::get('/checkout', function () {
    return view('pages/checkout', [
        "title" => "Checkout"
    ]);
});



Route::get('/login', function () {
    return view('pages/auth/login', [
        "title" => "Login"
    ]);
});

Route::get('/cart', function () {
    return view('pages/cart', [
        "title" => "Cart"
    ]);
});

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/admin/event', function () {
    return view('pages/admin/eventadmin', [
        "title" => "Event Admin"
    ]);
});

Route::get('/admin/achievement', function () {
    return view('pages/admin/achievementadmin', [
        "title" => "Achievement Admin"
    ]);
});

Route::get('/admin/about', function () {
    return view('pages/admin/aboutadmin', [
        "title" => "About Admin"
    ]);
});

Route::get('/admin/tambahevent', function () {
    return view('pages/admin/createevent', [
        "title" => "Tambah Event Admin"
    ]);
});



Route::resource('signup', SignupController::class);


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.show');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/cart', [CartController::class, 'showCart'])->name('cart');
Route::get('/add-to-cart/{product_id}', [CartController::class, 'addToCart'])->name('addToCart');

// Menampilkan halaman daftar event
Route::get('/event', [EventController::class, 'index'])->name('events.index');
Route::get('/admin/event', [EventController::class, 'indexadmin'])->name('events.index');

// Menampilkan formulir tambah event
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');

// Menyimpan event baru ke database
Route::post('/events/store', [EventController::class, 'store'])->name('events.store');

// Menampilkan formulir pengeditan event
Route::get('/admin/event/{id}/edit', [EventController::class, 'edit'])->name('event.edit');

// Menyimpan perubahan pada event
Route::put('/admin/event/{id}', [EventController::class, 'update'])->name('event.update');

// Menghapus event
Route::delete('/admin/event/{id}', [EventController::class, 'delete'])->name('event.delete');


