<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //Polymorphic Relationship to Purchase model.
    public function Purchases(){
        return $this->morphMany('App\Purchase', 'imageable');
    }

}
