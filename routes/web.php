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

Route::group(['prefix' => 'app', 'as' => 'app.', 'namespace' => 'App'], function () {
    Auth::routes(['register' => false]); //app.login
    Route::group(['middleware' => ['auth', 'tenant', 'bindings']], function () {
        Route::get('dashboard', function () {
            return view('app.dashboard');
        });
        Route::resource('categories', 'CategoryController');
        Route::resource('products', 'ProductController');
    });
});

Route::get('/home', 'HomeController@index')->name('home');

//Classe::metodo1()
//Facade - Design Pattern