<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookmodel extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo('App\Models\categorymodel','Categoryid');
    }
    public function location()
    {
        return $this->belongsTo('App\Models\locationmodel','Locationid');
    }
    public function worker()
    {
        return $this->belongsTo('App\Models\workermodel','workerid');
    }
    public function register()
    {
        return $this->belongsTo('App\Models\registermodel','customerid');
    }
}


