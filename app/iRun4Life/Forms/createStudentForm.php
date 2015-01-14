<?php namespace iRun4Life\Forms;

use Laracasts\Validation\FormValidator;

class createStudentForm extends FormValidator {

    protected $rules = [
        'username' => 'required|unique:student',
        'firstname' => 'required:student',
        'lastname' => 'required:student',
        'password' => 'required|confirmed'
    ];

}