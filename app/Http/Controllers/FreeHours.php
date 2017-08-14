<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Contracts\UseDB;

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
    public function show(Request $request, UseDB $useDB)
    {
        return $useDB->show_free_hours($request);
    }
}