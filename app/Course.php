<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function posts(){
        return $this->belongsToMany('App\Post')->withTimestamps();
    }
}
