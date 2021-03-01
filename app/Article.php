<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['titre','text','user_id'];

	

	public function article() 
	{
		return $this->belongsTo('App\User');
	}
}
