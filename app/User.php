<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    // mass assignment
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'photo_id', 'is_active','',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    // Relationship to role
    public function role(){

        return $this->belongsTo('App\Role');

    }


    // Relationship to photo
    public function photo(){

        return $this->belongsTo('App\Photo');

    }


    public function isAdmin(){

        if ($this->role->name == "administrator" && $this->is_active == 1) {

            return true;

        }


        return false;

    }


    //Relationship to post    a method function
    public function posts(){

        return $this->hasMany('App\Post');
    }



    public function getGravatarAttribute(){

        $hash = md5(strtolower(trim($this->attributes['email']))) . "?d=mm";
        return "http://gravatar.com/avatar/$hash";

    }


}
