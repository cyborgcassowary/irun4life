<?php
$S = new FunctionalTester($scenario);
$S->am('Parent');
$S->wantTo('perform actions and see result');

$S->amOnPage('/h');
$S->fillField('Username:', 'MFord');
$S->fillField('Password:', '1234');

$S->click('Sign In');

//$S->seeCurrentUrlEquals('/student');
$S->amLoggedAs('MFord');
//$S->seeCurrentUrlEquals('/register');


//$S->fillField('Email:', 'john@example.com');
//$S->fillField('Password:', 'demo');
//$S->fillField('Password Confirmation:', 'demo');
//$S->click('Sign Up');

//$S->seeCurrentUrlEquals('/h');
//$S->see('iRun4Life');
//
//$S->seeRecord('parents', [
//    'email' => 'john@example.com'
//]);
//
//$S->assertTrue(Auth::parent()->check());

//Auth::check()