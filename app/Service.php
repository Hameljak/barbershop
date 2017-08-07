<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Worker;
use App\Week_day;
use App\Booking;

class Service extends Model
{
    public function workers(){
        return $this->belongsToMany('App\Worker','worker_services','service_id', 'worker_id');
    }
    public function bookings(){
        return $this->hasMany('App\Booking','service_id','id');
    }
    public function week_day()
    {
        return $this->hasManyThrough('App\Work_day', 'App\Worker_service','worker_id','week_day_id','service_id');
    }
}
