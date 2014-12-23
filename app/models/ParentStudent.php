<?php

//use Eloquent;

class ParentStudent extends \Eloquent {

	protected $table = 'parent_student';

	protected $fillable = ['parent_id', 'student_id'];

}