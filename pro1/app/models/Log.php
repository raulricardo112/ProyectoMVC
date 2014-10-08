<?php

class Log extends \Eloquent {
	protected $fillable = [];
	
public function post()
	{
		return $this->belongsTo('Post');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}