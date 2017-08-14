<?php

namespace App\Services\Contracts;

use Illuminate\Http\Request;

Interface UseDB
{

    public static function show_free_hours(Request $request);

    public static function save(Request $request);

}
?>