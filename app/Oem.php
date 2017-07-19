<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oem extends Model
{
    // One to many relationship
    public function courses(){
        return $this->hasMany('App\Course','oem_id');
    }
    //Route Model Binding key definition
    public function getRouteKeyName()
    {
        return 'name_slug';
    }
}
