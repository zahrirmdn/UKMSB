<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;

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
    return view('cart', [
        "title" => "Cart"
    ]);
});



Route::resource('signup', SignupController::class);

