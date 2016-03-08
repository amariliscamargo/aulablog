<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $guarded = [];

   //Um post pode ter vários comentários

	public function comments()
	{
		return $this->hasMany('App\model\comment');
	}

	//Um post tem muitas tags

	public function tags()
	{
		return $this->belongsToMany('App\Tag','post_tags');
	}
}

