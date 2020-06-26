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

Route::get('/uploader', 'ImageController@index');
Route::post('/upload', 'ImageController@upload');
Route::delete('/image/{image}',  'ImageController@destroy');

Route::get('/maps', 'MapsController@index');
Route::post('/maps/save-address', 'MapsController@store');


Route::get('user-form', 'UserController@showForm');
Route::post('user/store', 'UserController@store');



Route::get('/', 'UserController@index');
Route::get('/auth/redirect', 'SocialAuthController@redirect')->name('facebook.redirect');

Route::get('logout', 'UserController@logout');
Route::get('/callback/{provider}', 'SocialAuthController@callback')->name('facebook.callback');

// Profile
Route::get('profile', 'UserController@showProfile');

// Search
Route::get('filter', 'FilterController@index');
// Route::post('filter', 'FilterController@filter');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
