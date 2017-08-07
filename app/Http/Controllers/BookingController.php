<?php
namespace App\Http\Controllers;
use App\Booking;
use App\Service;
use App\Worker;
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
    public function save_booking(Request $request){
        if($request->isMethod('post')) {
            $rules = [
                'service' => 'required|integer',
                'time' => 'required|date|after:now',
            ];
            $this->validate($request,$rules);
            $dbc = new DBController($_POST['service'], date("Y-m-d H:i:s", strtotime($_POST['time'])));
            if ($dbc->select_data()){

                $dbc->save_to_db();
                //dump('INSERT');
            }
        }
        return;
    }
}