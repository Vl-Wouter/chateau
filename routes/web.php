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

Route::get('/', 'HomeController@getIndex');

Route::prefix('clients')->group(function() {
    Route::get('/', 'ClientController@getIndex');
    Route::get('new', 'ClientController@getCreate');
    Route::get('{client}', 'ClientController@editClient');
    // Route::get('save', '');
});


// Route::get('/rooms/{client}', '');

Route::prefix('reservations')->group(function() {
    Route::get('/', 'ReservationsController@getReservations');
    Route::get('new', 'ReservationsController@getCreate');
    Route::get('edit', 'ReservationsController@getEdit');
    // Route::get('save', '');
});


