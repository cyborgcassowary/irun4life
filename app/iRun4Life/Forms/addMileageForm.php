<?php namespace iRun4Life\Forms;

use Laracasts\Validation\FormValidator;

class addMileageForm extends FormValidator {

    protected $rules = [
        'total_miles' => 'required:mileage'
    ];

}