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

Route::get('/', 'Front\FrontController@index');

Route::get('/about', function () {return view('frontend/pages/about');});
Route::get('/account-address', function () {return view('frontend/pages/account-address');});
Route::get('/account-orders', function () {return view('frontend/pages/account-orders');});
Route::get('/account-password-recovery', function () {return view('frontend/pages/account-password-recovery');});
Route::get('/account-payment', function () {return view('frontend/pages/account-payment');});
Route::get('/account-profile', function () {return view('frontend/pages/account-profile');});
Route::get('/account-signin', function () {return view('frontend/pages/account-signin');});
Route::get('/account-signup', function () {return view('frontend/pages/account-signup');});
Route::get('/account-tickets', function () {return view('frontend/pages/account-tickets');});
Route::get('/account-tickets', function () {return view('frontend/pages/account-tickets');});
Route::get('/account-wishlist', function () {return view('frontend/pages/account-wishlist');});
Route::get('/blog-single', function () {return view('frontend/pages/blog-single');});
Route::get('/blog', function () {return view('frontend/pages/blog');});
Route::get('/checkout-complete', function () {return view('frontend/pages/checkout-complete');});
Route::get('/checkout-details', function () {return view('frontend/pages/checkout-details');});
Route::get('/checkout-payment', function () {return view('frontend/pages/checkout-payment');});
Route::get('/checkout-review', function () {return view('frontend/pages/checkout-review');});
Route::get('/checkout-shipping', function () {return view('frontend/pages/checkout-shipping');});
Route::get('/contacts', function () {return view('frontend/pages/contacts');});
Route::get('/faq', function () {return view('frontend/pages/faq');});
Route::get('/order-tracking-form', function () {return view('frontend/pages/order-tracking-form');});
Route::get('/order-tracking', function () {return view('frontend/pages/order-tracking');});
Route::get('/product-list', function () {return view('frontend/pages/product-list');});
Route::get('/product-details', function () {return view('frontend/pages/product-details');});
Route::get('/shop-cart', function () {return view('frontend/pages/shop-cart');});
Route::get('/shop-categories', function () {return view('frontend/pages/shop-categories');});
Route::get('/single', function () {return view('frontend/pages/single');});







Route::get('/admin1','Admin\AdminController@admin1');
Route::get('/admin2', function () {
    return view('backend/pages/index2');
});
Route::get('/home', function () {
    return view('frontend/index');
});
