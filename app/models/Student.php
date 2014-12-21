<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\Collection;
// use Illuminate\Auth\UserInterface::getAuthIdentifier; 
// use Illuminate\Auth\UserInterface::getAuthPassword;
// use Illuminate\Auth\UserInterface::getRememberToken;

class Student extends Eloquent implements UserInterface, RemindableInterface{

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'student';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $fillable = ['username', 'firstname', 'lastname', 'grade_id', 'school_id', 'age'];

	protected $with = array('school', 'school');


//	public function getSchoolName(){
//		return Schools::where('id', $this->school)->first()->schoolname
//	}

	public function grade(){
		return $this->belongsTo('Grade', 'grade_id');

//		Call it with Eager loading - Student::find($id)->grade()->get();
	}

	public function school(){
		return $this->belongsTo('Schools', 'school_id');

		//		Call it with Eager loading - Student::find($id)->school()->get();
	}

	

}
