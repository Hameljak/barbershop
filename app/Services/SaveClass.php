<?php

namespace App\Services;

use App\Services\Contracts\UseDB;
use App\Services\DBController;
use Illuminate\Http\Request;

class SaveClass implements UseDB {

    public static function show_free_hours(Request $request){

        for( $t = strtotime('now') + 3600; $t < strtotime('+1 week'); $t += 3600){

            if( date("H", $t) >= 9 && date("H", $t) < 18 ) {

                $dbc = new DBController($request->id, date("Y-m-d H:00:00", $t));

                if ($dbc->select_data()){

                    $json_arr[] = date("Y-m-d H:00:00", $t);

                }

            }

        }

        return json_encode($json_arr);
    }

    public static function save(Request $request){

        $dbc = new DBController($request->input('service'), date("Y-m-d H:i:s", strtotime($request->input('time'))));

        if ($dbc->select_data()){

            $dbc->save_to_db($request);

        }
    }
}
?>