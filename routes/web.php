<?php

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
    return view('index');
})->name('index');

Route::get('Catagori',function (){
    return view('Catagori');
})->name('Catagori');

Route::get('product_list',function (){
    return view('product_list');
})->name('product_list');

Route::get('single-product',function (){
    return view('single-product');
})->name('single-product');

Route::get('cart',function (){
    return view('cart');
})->name('cart');

Route::get('login',function (){
    return view('login');
})->name('login');
