<?php namespace iRun4Life\Forms;

use Laracasts\Validation\FormValidator;

class RegistrationForm extends FormValidator {

    protected $rules = [
        'firstname' => 'required:parents',
        'lastname' => 'required:parents',
        'email' => 'required|email|unique:parents',
        'password' => 'required|confirmed'
    ];
}