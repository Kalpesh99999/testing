<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    protected $fillable = [
        'name', 'description', 'course_id',
    ];

    public function Purchases(){
        return $this->morphMany('App\Purchase', 'imageable');
    }
}
