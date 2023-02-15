<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.home');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/blog-details', function () {
    return view('pages.blog_details');
});

Route::get('/products', function () {
    return view('pages.products');
});

Route::get('/product-details', function () {
    return view('pages.product_details');
});

Route::get('/about-us', function () {
    return view('pages.about');
});

Route::get('/contact-us', function () {
    return view('pages.contact');
});

Route::get('/cart', function () {
    return view('pages.cart');
});

Route::get('/order-completed', function () {
    return view('pages.order');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});
