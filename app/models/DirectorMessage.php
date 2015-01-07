<?php

class DirectorMessage extends \Eloquent {

	protected $table = 'directormessage';

	protected $fillable = ['director_id', 'message'];

}