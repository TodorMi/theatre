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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('theatres','TheatreController');
Route::resource('locations','LocationController');
Route::resource('tickets','TicketController');

Route::resource('images', 'ImagesController');

Route::post('theatres.search', 'SearchController@searchTheatres');
Route::post('locations.search', 'SearchController@searchLocations');



