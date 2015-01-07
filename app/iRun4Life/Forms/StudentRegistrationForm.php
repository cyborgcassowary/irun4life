<?php namespace iRun4Life\StudentRegistrationForm;

use Laracasts\Validation\FormValidator;

class StudentRegistrationForm extends FormValidator {
//parents have control... directors too... and admins.
    protected $rules = [
        'username' => 'required|unique:student',
        'firstname' => 'required:student',
        'lastname' => 'required:student',
        'password' => 'required|confirmed'
    ];
}