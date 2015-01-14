<?php

class Director extends \Eloquent {

    protected $fillable = ['email', 'firstname', 'lastname', 'password'];

    protected $table = 'director';

    protected $hidden = array('password', 'remember_token'); //

}