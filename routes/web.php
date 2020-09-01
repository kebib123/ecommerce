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
    return view('welcome');
});


Route::get('/admin1', function () {
    return view('backend/pages/index');
});
Route::get('/admin2', function () {
    return view('backend/pages/index2');
});
Route::get('/home', function () {
    return view('frontend/index');
});
