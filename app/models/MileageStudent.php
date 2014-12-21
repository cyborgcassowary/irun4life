<?php

class MileageStudent extends Eloquent {

	//Eloquent::unguard();

	protected $table = 'mileage_student';

	protected $fillable = ['mileage_id', 'student_id'];

}