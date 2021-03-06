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

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace'=>'Admin','prefix'=>'admin'], function() {

    Route::get('login', 'AuthController@showLoginForm')->middleware('guest:admin,/admin');
    Route::post('login', 'AuthController@login')->name('adminLogin');
    Route::group(['middleware'=>'admin:admin'], function() {
        Route::get('/', 'IndexController@index');
        Route::any('logout', 'AuthController@logout')->name('adminLogout');

        Route::resource('admins', 'AdminController');
    });



});