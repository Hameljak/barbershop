<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;
class Booking extends Model
{
    protected $fillable = [
        'service_id', 'worker_id', 'status','time_start','time_finish'
    ];

    public function services(){
        return $this->belongsToMany('App\Service','bookings','id','service_id');
    }
}
