<?php 


class Mileage extends \Eloquent {

	protected $table = 'mileage';

	protected $fillable = ['activity_name', 'total_miles'];

	public function student()
	{
		return $this->belongsToMany('Student');
	}

}