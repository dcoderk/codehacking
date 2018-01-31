<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;


//class Post extends Model implements SluggableInterface
class Post extends Model 
{

    
    use Sluggable;
    use SluggableScopeHelpers;
   
   

    //mass assignment
    protected $fillable = [

    	'category_id',
    	'photo_id',
    	'title',
    	'body'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


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


    public function comments(){


        return $this->hasMany('App\Comment');

    }



    public function photoPlaceholder(){

        return "http://placehold.it/700x200";

    }
    

  

}
