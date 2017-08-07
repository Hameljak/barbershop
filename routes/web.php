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
Route::get('/freehours/{id}', ['as'=>"freehours",'uses'=>"FreeHours@show"]);

Route::get('/form', function () {
    return view('form');
});
Route::get('/booking', "BookingController@show");
Route::post('/booking', "BookingController@save_booking");
//Route::post('/booking', function (){
 //   print_r($_POST);
//});