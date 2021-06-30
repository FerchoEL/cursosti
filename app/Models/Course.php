<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = ['id','status'];
    protected $withCount = ['students','reviews'];


    const BORRADOR=1;
    const REVISION=2;
    const PUBLICADO=3;

    public function getRatingAttribute(){

        if($this->reviews_count){
            return round($this->reviews->avg('rating'),1);
        }else{
            return 5;
        }
        
    }


    //Relacion uno a muchos

    public function reviews(){
        return $this->hasMany('App\Models\Review');
    }
    public function requirement(){
        return $this->hasMany('App\Models\Requirement');
    }
    public function goals(){
        return $this->hasMany('App\Models\Goal');
    }
    public function audiences(){
        return $this->hasMany('App\Models\Audience');
    }
    public function sections(){
        return $this->hasMany('App\Models\Stection');
    }


    //Relacion uno a muchos inversa
    public function teacher(){
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function level(){
        return $this->belongsTo('App\Models\Level');
    }
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
    public function Price(){
        return $this->belongsTo('App\Models\Price');
    }

    //Relacion muchos a muchos inversa
    public function students(){
        return $this->belongsToMany('App\Models\User');
    }
    //RElacuion uno a uno polimorfica

    public function image(){
        return $this->morphOne('App\Models\Image','imageable');
    }

    public function lessons(){
        return $this->hasManyThrough('App\Models\Lessons','App\Models\Section');
    }
    
}
