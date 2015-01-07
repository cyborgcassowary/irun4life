<?php

//use Eloquent;

class Admins extends \Eloquent {

	protected $table = ['superadmins'];
	protected $guarded = [];
	protected $fillable = ['firstname', 'lastname', 'password', 'school'];

}