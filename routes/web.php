<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\customer\ProductController as CustomerProductController;
use App\Http\Controllers\customer\HomeController as HomeController;
use App\Http\Controllers\customer\CartController as CartController;
use App\Http\Controllers\customer\CheckoutController as CheckoutController;
use App\Http\Controllers\customer\OrderController as OrderController;
use App\Http\Controllers\customer\AuthController as CustomerAuthController;
use App\Http\Controllers\admin\AuthController as AdminAuthController;

use App\Http\Controllers\admin\UserController ;


use App\Http\Controllers\admin\UserController as AdminUserController;
use App\Http\Middleware\CheckAminLogin;
use App\Http\Middleware\CheckMemberLogin;
use App\Http\Middleware\CheckRoleAdmin;
use App\Http\Middleware\CheckRoleCustomer;

Route::get('/', [HomeController::class,'index'])->name('home');



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



Route::prefix('customer')->middleware([CheckMemberLogin::class,CheckRoleCustomer::class])->group(function () {
 
    Route::resource('cart',CartController::class);  
    Route::resource('check-out', CheckoutController::class);
    Route::resource('order',OrderController::class);

});


Route::prefix('customer')->group(function () {
    Route::resource('products',CustomerProductController::class);
    Route::resource('home', HomeController::class);
    Route::get('category/{categoryName}',[CustomerProductController::class,'category']);
    Route::get('tag/{tagName}',[CustomerProductController::class,'tag']);
});

Route::get('login',[CustomerAuthController::class,'login'])->name('login');
Route::post('checkLogin',[CustomerAuthController::class,'checkLogin'])->name('checkLogin');
Route::get('logout',[CustomerAuthController::class,'logout'])->name('logout');

Route::get('/checkout/vnPayCheck',[CheckoutController::class,'vnPayCheck']);
Route::get('register',[CustomerAuthController::class,'registerView'])->name('registerView');
Route::post('register',[CustomerAuthController::class,'register'])->name('register');



Route::prefix('admin')->middleware([CheckMemberLogin::class,CheckRoleAdmin::class])->group(function () {
    Route::resource('users', UserController::class);
});

