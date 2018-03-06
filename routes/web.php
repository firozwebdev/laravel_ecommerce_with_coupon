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

Route::get('/',[
    'uses' => 'LandingPageController@index',
    'as' => 'home.page.index'
]);

Route::get('/shop',[
    'uses' => 'ShopController@index',
    'as' => 'shop.page.index'
]);

Route::get('/cart', function () {
   
    return view('front-end.pages.cart-page.cart-page');
});

Route::get('/product-detail', function () {
   
    return view('front-end.pages.product-detail-page.product-detail-page');
});

Route::get('/checkout', function () {
   
    return view('front-end.pages.checkout-page.checkout-page');
});
