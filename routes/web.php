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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::group(['prefix' => 'Category'], function () {
        Route::get('category/{id?}', 'CategoryController@add_category')->name('add-category');
        Route::post('category', 'CategoryController@add_category')->name('add-category');
        Route::any('show-category', 'CategoryController@show_category')->name('show-category');
        Route::any('edit-category/{id?}', 'CategoryController@edit_category')->name('edit-category');
        Route::any('delete-category/{id}', 'CategoryController@delete_category')->name('delete-category');
        Route::any('update-category', 'CategoryController@update_category')->name('update-category');
    });

});
