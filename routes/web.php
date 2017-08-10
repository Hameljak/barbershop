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
/**
 * @SWG\Swagger(
 *   @SWG\Info(
 *     title="API Documentation",
 *     version="1.0.0"
 *   )
 * )
 */
Route::get('/', function () {
    return view('welcome');
});
/* Get User by ID */

/**
 * @SWG\Get(path="/freehours/{id}",
 *   summary="Get Freehours",
 *   description="Get Freehours by service ID.",
 *  @SWG\Parameter(
 *     in="path",
 *     name="id",
 *     description="Service ID",
 *     required=true,
 *     type="integer"
 *   ),
 *  @SWG\Response(
 *     response=200,
 *     description="Freehours list"
 *  ),
 *  @SWG\Response(
 *    response=422,
 *    description="Failed validation"
 *  )
 * )
 */
Route::get('/freehours/{id}', ['as'=>"freehours",'uses'=>"FreeHours@show"]);

Route::get('/form', function () {
    return view('form');
});

Route::get('/booking', "BookingController@show");


/* Booking Service*/

/**
 * @SWG\Post(
 *   path="/booking",
 *   summary="Make booking in system",
 *   consumes={"form-data"},
 *  @SWG\Parameter(
 *     in="formData",
 *     name="service",
 *     description="User select service",
 *     required=true,
 *     type="integer"
 *   ),
 *   @SWG\Parameter(
 *     in="formData",
 *     name="time",
 *     description="User email address",
 *     required=true,
 *     type="time"
 *   ),
 *
 *   @SWG\Response(
 *     response=200,
 *     description="Save booking in database",
 *
 *   ),
 *   @SWG\Response(
 *     response="default",
 *     description="Failed validation"
 *   )
 * )
 */
Route::post('/booking', "BookingController@save_booking");

