<?php
/**
 * Created by PhpStorm.
 * User: CyborgCassowary
 * Date: 12/7/14
 * Time: 8:21 PM
 */

namespace iRun4Life\Registration;


class RegisterParentCommand {
    public $firstname;
    public $lastname;
    public $email;
    public $password;

    function __construct($firstname, $lastname, $email, $password)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
    }


}