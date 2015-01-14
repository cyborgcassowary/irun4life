<?php

//use Eloquent;

class StudentGoodDeeds extends \Eloquent {

    protected $table = 'gooddeeds_student';

    protected $fillable = ['gooddeed_id', 'student_id'];

}