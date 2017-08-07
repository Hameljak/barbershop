<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use App\Service;

class FreeHours extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Free Hours Controller
    |--------------------------------------------------------------------------
    |
    | This controller processes the customer request for the service
    | and displays a list of free hours within a week
    |
    */
    public function show($idn)
    {

        for($t=strtotime('now')+3600;$t<strtotime('+1 week');$t+=3600){

            if(date("H", $t) >= 9 && date("H", $t) < 18 ) {
                $dbc = new DBController($idn, date("Y-m-d H:00:00", $t));
                if ($dbc->select_data()){
                    echo date("Y-m-d H:00:00", $t);
                    echo '<br>';
                }

            }

        }

    }
}