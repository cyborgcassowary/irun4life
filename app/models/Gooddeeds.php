<?php 
//use Eloquent;

class Gooddeeds extends \Eloquent {

	protected $fillable = ['deed_name', 'score'];

	public function student()
	{
		return $this->belongsToMany('Student');
	}

}