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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'RoomController@index');
Route::get('/identity/{id}', 'GuestController@get_id_number');
Route::get('/guest', 'GuestController@index');
Route::post('/guest/book', 'GuestController@add_info');
Route::get('/guest/book/info', 'GuestController@more_info');
Route::get('/guest/book/checkin', 'GuestController@add_check_in');
Route::post('/guest/book/checkin', 'BookingController@checkin');
Route::get('/guest/checkout/{id}', 'BookingController@checkout');

