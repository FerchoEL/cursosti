<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    //RElacion uno a muchos inversa

    public function user(){
        return $this->belongsToMany('App\Models\User');
    }
    public function course(){
        return $this->belongsToMany('App\Models\Course');
    }

}
