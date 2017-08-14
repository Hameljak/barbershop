<?php
namespace App\Http\Controllers;

use App\Services\Contracts\UseDB;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Booking Controller
    |--------------------------------------------------------------------------
    |
    | This controller processes customer request for service and time
    | Save the booking to the database
    |
    */
    public function show(){

        echo '<h1>Booking</h1>';

    }
    /**
     * Save the booking to the database.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return void
     */
    public function save_booking(Request $request, UseDB $useDB)
    {
        if($request->isMethod('post')) {

            $rules = [

                'service' => 'required|integer',
                'time' => 'required|date|after:now',

            ];

            $this->validate($request,$rules);

            return $useDB->save($request);

        }
        return;
    }
}