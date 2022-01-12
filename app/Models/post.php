<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $guarded=[];
//Author name Show
    Public function Author(){
        return $this ->belongsTo('App\Models\User','user_id','id');
    }
    //laravel system relationship building
    public function Tags(){
        return $this->belongsToMany('App\Models\Tag');
    }
    // user define relationship building
    // public function Cats(){
    //     return $this->belongsToMany('App\Models\Category','post_category_rel','post_id','cat_id');
    // }

    Public function postCat(){
        return $this ->belongsTo('App\Models\Category','category','id');
    }
}



