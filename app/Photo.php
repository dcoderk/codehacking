<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    
	// mass assignemnt

	protected $uploads = '/images/'; 


	protected $fillable = ['file'];



	//relationship   //accessor function
	public function getFileAttribute($photo){


		return $this->uploads . $photo;

	}


}
