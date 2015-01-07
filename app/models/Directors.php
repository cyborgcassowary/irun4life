<?php
//use Eloquent;

//use Illuminate\Auth\UserTrait;
//use Illuminate\Auth\UserInterface;
//use Illuminate\Auth\Reminders\RemindableTrait;
//use Illuminate\Auth\Reminders\RemindableInterface;
//use Illuminate\Database\Eloquent;
//use Illuminate\Hashing;

class Directors extends \Eloquent { //implements UserInterface, RemindableInterface

//	use UserTrait, RemindableTrait;

//	Eloquent::unguard();

	protected $table = ['schooldirectors'];
	protected $guarded = [];
	protected $fillable = ['firstname', 'lastname', 'password', 'school'];


//	function school(){
//		return $this->hasOne('Schools');
//	}

}