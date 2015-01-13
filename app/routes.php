<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function(){
	return View::make('dummy');
});

# CSRF Protection
Route::when('*', 'csrf', ['POST', 'PUT', 'PATCH', 'DELETE']);

# Static Pages. Redirecting admin so admin cannot access these pages.
Route::group(['before' => 'redirectAdmin'], function()
{
	Route::get('/h', ['as' => 'home', 'uses' => 'PagesController@getHome']);
	Route::get('/adminlogin', ['as' => 'adminlogin', 'uses' => 'PagesController@adminlogin']);
});

// Parent Registration
//php

Route::get('parents', function(){
	$parents = Parents::all();
//	dd($parents);
	return View::make('parents/index')->with('parents', $parents);
});

Route::get('register', ['as' => 'register_path', 'uses' => 'RegistrationController@create']);

Route::post('register', [
	'as' => 'register_path',
	'uses' => 'RegistrationController@store'
]);

// Student Query tests

//Route::get('admin', array('as' => 'adminpage', 'before' => 'auth|crsf', 'uses' => 'SessionController@adminPage'));

Route::get('student', 'StudentController@index');
Route::get('student/{id}', 'StudentController@show')->where('id', '\d+');

//Route::get('student', array('uses' => 'StudentController@index'));
//'as' => 'loggedin', 'before' => 'auth|csrf',
Route::get('studentschools/{id}', function($id){
	return DB::select('SELECT student.id AS sid, student.username AS username, student.firstname AS firstname, student.lastname AS lastname, student.grade_id AS grade, schools.name AS school FROM student INNER JOIN schools ON student.school_id = schools.id WHERE student.id ='. $id );
});


Route::get('schools', function(){
	return Schools::all();
});

Route::get('school/{id}', function($id){
	return Schools::find($id);
});


Route::get('student/{id}/miles/view', 'StudentController@viewmiles')->where('id', '\d+');



Route::get('director', 'DirectorSessionsController@index');


// routes for student login / dashboard

Route::get('studentdashlogin', 'StudentSessionsController@create');
Route::get('studentdashlogout', 'StudentSessionsController@destroy');
//
Route::resource('studentdash', 'StudentSessionsController');
//
//Route::get('studentadmin', function()
//{
//	return 'Admin Page';
//});

Route::get('studentdata', function(){
	return Student::all();
});

//Route::get('{ember?}', function(){
//	return View::make('ember');
//})->where('ember', '.*');
