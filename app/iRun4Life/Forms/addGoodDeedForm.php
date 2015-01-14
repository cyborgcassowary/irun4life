<?php namespace iRun4Life\Forms;

use Laracasts\Validation\FormValidator;

class addGoodDeedForm extends FormValidator {

    protected $rules = [
        'deed_name' => 'required:gooddeeds'
    ];

}