<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // One to many relationship
    public function lessons(){
        return $this->hasMany('App\Lesson','course_id');
    }
    //Polymorphic Relationship to Purchase model.
    public function Purchases(){
        return $this->morphMany('App\Purchase', 'imageable');
    }

}
