<?php 

//use Eloquent;
use Illuminate\Auth\Reminders\Collection;

class Grade extends \Eloquent {

	public $timestamps = false;

	protected $table = 'grade';

	protected $fillable = ['grade'];

	function students(){
		return $this->hasMany('Student');
	}

}