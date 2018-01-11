<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //Mass Assignment
    protected $fillable = [

    	'post_id',
    	'author',
    	'email',
        'photo',
    	'body',
    	'is_active'

    ];

   

    //Relationship with CommentReply
    public function replies(){

    	return $this->hasMany('App\CommentReply');

    }

    public function post(){

        return $this->belongsTo('App\Post');

    }


    
}
