<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workermodel extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo('App\Models\bookmodel');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\categorymodel','Categoryid');
    }
    public function location()
    {
        return $this->belongsTo('App\Models\locationmodel','Locationid');
    }
    
    public function book()
    {
        return $this->belongsTo('App\Models\bookmodel','rid');
    }
}
