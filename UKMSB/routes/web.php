<?php

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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/shop', function () {
    return view('shop', [
        "title" => "Shop"
    ]);
});

Route::get('/checkout', function () {
    return view('checkout', [
        "title" => "Checkout"
    ]);
});

Route::get('/cart', function () {
    return view('cart', [
        "title" => "Cart"
    ]);
});


