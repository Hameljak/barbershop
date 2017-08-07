<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week_day extends Model
{
    public function workers(){
        return $this->belongsToMany('App\Worker','work_days','week_day_id', 'worker_id');
    }
}
