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
	Route::get('/login', ['as' => 'home', 'uses' => 'PagesController@getHome']);
	Route::get('/adminlogin', ['as' => 'adminlogin', 'uses' => 'PagesController@adminlogin']);
	Route::get('/student', ['as' => 'studenthome', 'uses' => 'PagesController@studenthome']);
});

// Parent Registration
//php

Route::get('parents', function(){
	$parents = Parents::all();
//	dd($parents);
	return View::make('parents/index')->with('parents', $parents);
});

Route::get('parent/{id}', 'ParentsController@show')->where('id', '\d+');

Route::get('register', ['as' => 'register_path', 'uses' => 'RegistrationController@create']);

Route::post('register', [
	'as' => 'register_path',
	'uses' => 'RegistrationController@store'
]);

// Student Query tests

//Route::get('admin', array('as' => 'adminpage', 'before' => 'auth|crsf', 'uses' => 'SessionController@adminPage'));

Route::get('student', ['as' => 'student', 'uses' => 'StudentController@index']);
Route::get('student/{id}', 'StudentController@show')->where('id', '\d+');


//Route::get('student', array('uses' => 'StudentController@index'));
//'as' => 'loggedin', 'before' => 'auth|csrf',
Route::get('studentschools/{id}', function($id){
	return DB::select('SELECT student.id AS sid, student.username AS username, student.firstname AS firstname, student.lastname AS lastname, student.grade_id AS grade, schools.name AS school FROM student INNER JOIN schools ON student.school_id = schools.id WHERE student.id ='. $id );
});


Route::get('student/{id}/miles/view', 'StudentController@viewmiles')->where('id', '\d+');

Route::get('schools', function(){
	return Schools::all();
});

Route::get('school/{id}', function($id){
	return Schools::find($id);
});

Route::get('director', 'DirectorSessionsController@index');


// routes for student login / dashboard

Route::get('/student/addmiles', 'StudentController@milesForm');
Route::post('/student/addmiles', ['as' => 'addmiles', 'uses' => 'StudentController@addMiles']);

//Route::get('/student/addmiles', 'StudentController@milesForm');
Route::post('/student/addgooddeed', ['as' => 'addgooddeed', 'uses' => 'StudentController@addGoodDeed']);

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

Route::get('latestmiles', function(){

	//return Student::orderBy('id', 'DESC')->get();
	return Student::find(1)->miles()->orderBy('date', 'ASC')->take(5)->get();
//	Student::find(1)->miles()->take(7)->get();

});


Route::get('studentmiles', function(){
	$student = Student::first();
//	$student->miles()->attach(29);

	$student->miles()->sync(array(21, 22, 23));

	return $student->miles;
});

Route::get('studentlast', function(){
	$student = Student::first();
	return $student->orderBy('created_at', 'DESC');
});

//Route::get('{ember?}', function(){
//	return View::make('ember');
//})->where('ember', '.*');
