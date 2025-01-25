<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\customer\ProductController as CustomerProductController;
use App\Http\Controllers\customer\HomeController as HomeController;
use App\Http\Controllers\customer\CartController as CartController;
use App\Http\Controllers\customer\CheckoutController as CheckoutController;
use App\Http\Controllers\customer\OrderController as OrderController;

Route::get('/', [CustomerProductController::class,'index'])->name('home');

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



Route::prefix('customer')->group(function () {
    Route::resource('products',CustomerProductController::class);
    Route::resource('cart',CartController::class);
    Route::resource('home', HomeController::class);
    Route::resource('check-out', CheckoutController::class);
    Route::resource('order',OrderController::class);
    Route::get('category/{categoryName}',[CustomerProductController::class,'category']);
    Route::get('tag/{tagName}',[CustomerProductController::class,'tag']);
});