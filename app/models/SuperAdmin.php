<?php

class SuperAdmin extends \Eloquent {

	protected $fillable = ['email', 'firstname', 'lastname', 'password'];

	protected $table = 'superadmins';

}