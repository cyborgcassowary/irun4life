<?php
// SignUpCept - parent Registration
//$I = new FunctionalTester($scenario);
//$I->am('Parent');
//$I->wantTo('perform actions and see result');
//
//$I->amOnPage('/h');
//$I->click('Join');
//$I->seeCurrentUrlEquals('/register');
//
//$I->fillField('First Name:', 'John');
//$I->fillField('Last Name:', 'Doe');
//$I->fillField('Email:', 'john@example.com');
//$I->fillField('Password:', 'demo');
//$I->fillField('Password Confirmation:', 'demo');
//$I->click('Sign Up');
//
//$I->seeCurrentUrlEquals('/h');
//$I->see('iRun4Life');
//
//$I->seeRecord('parents', [
//    'email' => 'john@example.com'
//]);
//
//$I->assertTrue(Auth::parent()->check());

//Auth::check()


// Student Login

$I = new FunctionalTester($scenario);
$I->am('Student');
$I->wantTo('perform actions and see result');

$I->amOnPage('/h');
$I->fillField('Username:', 'MFord');
$I->fillField('Password:', '1234');

$I->click('Sign In');

$I->amLoggedAs('MFord');