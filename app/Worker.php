<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Week_day;
use App\Service;

class Worker extends Model
{
    protected $table = 'workers';
//    public function work_days(){
//        return $this->belongsToMany('App\Work_day');
//    }
    public function work_days(){
        return $this->belongsToMany('App\Week_day', 'work_days');
    }
    public function services(){
        return $this->belongsToMany('App\Service','worker_services');
    }
}
