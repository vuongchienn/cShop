<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customer.index');
})->name('home');

Route::get('/login', function () {
    return view('customer.login');
})->name('login');

Route::get('/shop', function () {
    return view('customer.shop');
})->name('shop');


Route::get('/blog', function () {
    return view('customer.blog');
})->name('blog');


Route::get('/check-out', function () {
    return view('customer.check-out');
})->name('check-out');


Route::get('/contact', function () {
    return view('customer.contact');
})->name('contact');


Route::get('/product', function () {
    return view('customer.product');
})->name('product');


Route::get('/shopping-cart', function () {
    return view('customer.shopping-cart');
})->name('shopping-cart');


Route::get('/blog-details', function () {
    return view('customer.blog-details');
})->name('blog-details');


