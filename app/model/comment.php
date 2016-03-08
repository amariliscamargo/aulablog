<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $guarded = [];

    //Os comentários pertencem a um único post

    public function post()
    {
    	return $this->belongsTo('App\Post');
    }
}
