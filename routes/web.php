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

Route::get('/', 'PagesController@index');
Route::get('/services', 'PagesController@services');
Route::get('/courses', 'PagesController@courses');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/blog', 'PagesController@blog');
Route::get('/team', 'PagesController@team');
Route::get('/about', 'PagesController@about');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
