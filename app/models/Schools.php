<?php 

//use Eloquent;
use Illuminate\Auth\Reminders\Collection;

class Schools extends \Eloquent {

	//use Eloquent;

	protected $table = 'schools';

	protected $fillable = ['name', 'bio', 'address', 'town', 'state', 'zip', 'year_joined'];

	protected $guarded = ['id'];



	//return $this->belongsToMany('SchoolReports');

//	function students(){
//		return $this->hasMany('Student');
//	}
//
//	function director(){
//		return $this->hasOne('Directors');
//	}

}