<?php namespace iRun4Life\Student;

//use Laracasts\Validation\FormValidator;

class Student {

    protected $rules = [
        'username' => 'required|unique:student',
        'firstname' => 'required:student',
        'lastname' => 'required:student',
        'password' => 'required|confirmed'
    ];
}