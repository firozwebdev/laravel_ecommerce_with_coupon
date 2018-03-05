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
    return view('front-end.pages.front-page.home-page');
});
Route::get('/shop', function () {
   
    return view('front-end.pages.shop-page.shop-page');
});
Route::get('/cart', function () {
   
    return view('front-end.pages.cart-page.cart-page');
});
Route::get('/product-detail', function () {
   
    return view('front-end.pages.product-detail-page.product-detail-page');
});
