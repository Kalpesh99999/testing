<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable=['path'];

    //Polymorphic Relationship to Course and Lecture Models.
    public function imageable(){
        return $this->morphTo();
    }
}
