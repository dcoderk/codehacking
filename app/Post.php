<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //mass assignment
    protected $fillable = [

    	'category_id',
    	'photo_id',
    	'title',
    	'body'
    ];


    //relationship to user
    public function user(){

    	return $this->belongsTo('App\User');

    }

    //relationship to photo
    public function photo(){

    	return $this->belongsTo('App\Photo');

    }

    //relationship to category
    public function category(){

    	return $this->belongsTo('App\Category');

    }



}
