<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;

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

Route::get('/event', function () {
    return view('pages/event', [
        "title" => "Event"
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



Route::resource('signup', SignupController::class);


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.show');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');




Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');



Route::get('/cart', [CartController::class, 'showCart'])->name('cart');
Route::get('/add-to-cart/{product_id}', [CartController::class, 'addToCart'])->name('addToCart');


