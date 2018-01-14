<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

use Illuminate\Database\Eloquent\Model;


class Post extends Model implements SluggableInterface
{

        use SluggableTrait;
    /**
     * Sluggable configuration.
     *
     * @var array
     */
    protected $sluggable = [
        'build_from'     => 'title',
        'save_to'        => 'slug',
        'on_update'      => true, 
    ];


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


    public function comments(){


        return $this->hasMany('App\Comment');

    }
    

  

}
