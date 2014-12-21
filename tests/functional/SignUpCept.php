<?php 
$I = new FunctionalTester($scenario);
$I->am('Parent');
$I->wantTo('perform actions and see result');

$I->amOnPage('/');
$I->click('Join');
$I->seeCurrentUrlEquals('/register');

$I->fillField('First Name:', 'John');
$I->fillField('Last Name:', 'Doe');
$I->fillField('Email:', 'john@example.com');
$I->fillField('Password:', 'demo');
$I->fillField('Password Confirmation:', 'demo');
$I->click('Sign Up');

$I->seeCurrentUrlEquals('');
$I->see('iRun4Life');

$I->seeRecord('parents', [
    'email' => 'john@example.com'
]);

$I->assertTrue(Auth::check());