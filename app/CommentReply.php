<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    //Mass Assignment
    protected $fillable = [

    	'comment_id',
    	'author',
    	'email',
        'photo',
    	'body',
    	'is_active'

    ];


    //Relationship with Comment
    public function comment(){

    	return $this->belongsTo('App\Comment');
    	

    }

}
