<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;


Route::controller(UserAuthController::class)->group(function(){
    Route::get('/', 'homePage')->name('home')->middleware('alreadyLogin');
    Route::get('/login', 'login')->name('login')->middleware('alreadyLogin');
    Route::get('/registration', 'registration')->name('registration')->middleware('alreadyLogin');

    Route::post('/registration', 'registerUser')->name('register-user');
    Route::post('/login-user', 'loginUser')->name('login-user');

    Route::get('/dashboard', 'dashboard')->name('dashboard')->middleware('isLoggedIn');

    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(ProductController::class)->group(function(){
    Route::get('/product.table', 'productTable')->name('product_table')->middleware('isLoggedIn');
    Route::get('/product.add', 'productAddPage')->name('product_add')->middleware('isLoggedIn');
    Route::post('/product.add', 'productInsert')->name('product_insert')->middleware('isLoggedIn');
    Route::get('/product.delete', 'productDelete')->name('product_delete')->middleware('isLoggedIn');
    Route::get('/product.update', 'productUpdatePage')->name('product_edit')->middleware('isLoggedIn');
    Route::post('/product.update', 'productUpdate')->name('product_update')->middleware('isLoggedIn');
    Route::get('/product.search', 'productSearch')->name('product_search')->middleware('isLoggedIn');
});
