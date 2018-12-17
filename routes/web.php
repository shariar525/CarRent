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
    return view('frontend.index');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search', 'HomeController@search')->name('home.search');
Route::get('/car/{id}', 'HomeController@car_details')->name('home.car_details');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware(['auth', 'authAdmin', 'verified'])->group(function() {
    Route::get('/', 'AdminController@index')->name('index');

    Route::prefix('user')->name('users.')->group(function() {
        Route::get('/', 'CarOwnerUserController@index')->name('index');
        Route::get('/create', 'CarOwnerUserController@create')->name('create');
        Route::post('/store', 'CarOwnerUserController@store')->name('store');
        Route::get('/edit/{id}', 'CarOwnerUserController@edit')->name('edit');
        Route::post('/update/{id}', 'CarOwnerUserController@update')->name('update');
        Route::get('/delete/{id}', 'CarOwnerUserController@delete')->name('delete');
    });

    Route::prefix('category')->name('category.')->group(function() {
        Route::get('/', 'CategoryController@index')->name('index');
        Route::get('/create', 'CategoryController@create')->name('create');
        Route::post('/store', 'CategoryController@store')->name('store');
        Route::get('/delete/{slug}', 'CategoryController@delete')->name('delete');
        Route::get('/edit/{slug}', 'CategoryController@edit')->name('edit');
        Route::post('/update/{slug}', 'CategoryController@update')->name('update');
    });

    Route::prefix('cars')->name('cars.')->group(function() {
        Route::get('/', 'CarController@index')->name('index');
        Route::get('/create', 'CarController@create')->name('create');
        Route::post('/store', 'CarController@store')->name('store');
        Route::get('/delete/{id}', 'CarController@delete')->name('delete');
        Route::get('/edit/{id}', 'CarController@edit')->name('edit');
        Route::post('/update/{id}', 'CarController@update')->name('update');
    });

});


