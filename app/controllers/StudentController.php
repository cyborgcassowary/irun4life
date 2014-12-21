<?php

class StudentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /student
	 *
	 * @return Response
	 */

	public function index()
	{
		// fetch all tasks


		//return 'show all tasks';

		$student = Student::all();



		return View::make('student.index', compact('student'));

		// load a view to display them



	}

	public function show($id)
	{
		// return 'show task with an id of '. $id;

		$stu = Student::find($id);

			//DB::select('SELECT DISTINCT student.id AS sid, student.username AS username, student.firstname AS firstname, student.lastname AS lastname, student.grade_id AS grade, schools.name AS school FROM student INNER JOIN schools ON student.school_id = schools.id WHERE student.id ='. $id );;

		//$school = Student::findOrFail($id)->school_id;



		$miles = DB::select('SELECT DISTINCT student.id, student.username, mileage.id AS mid, mileage.activity_name, mileage.total_miles FROM student INNER JOIN mileage_student ON mileage_student.student_id = student.id INNER JOIN mileage ON mileage.id = mileage_student.mileage_id WHERE student.id = '.$id);
		$gooddeeds = DB::select('SELECT student.id, student.username, gooddeeds.deed_name, gooddeeds.score FROM student INNER JOIN gooddeed_student ON gooddeed_student.student_id = student.id INNER JOIN gooddeeds ON gooddeeds.id = gooddeed_student.gooddeed_id WHERE student.id = '.$id);
		// return $task;
		return View::make('student.show', compact('stu', 'miles', 'gooddeeds'));






		//DB::select('SELECT student.id AS sid, student.username AS username, student.firstname AS firstname, student.lastname AS lastname, student.grade_id AS grade, schools.name AS school FROM student INNER JOIN schools ON student.school_id = schools.id WHERE student.id ='. $id );
		//Student::findOrFail($id);

		//$school = $stu->school;


		//DB::select('SELECT student.id AS id, student.username AS username, student.firstname AS firstname, student.lastname AS lastname, student.grade AS grade, schools.name AS school FROM student INNER JOIN schools ON student.school = schools.id WHERE student.id = '. $id );

		//DB::table
		//Student::findOrFail($id);
		//$school = Student::find($id)->schools;
		//$school = DB::select('SELECT schools.name FROM schools INNER JOIN student ON student.school = schools.id WHERE student.id = 1'.$id);
		//
		//$school = Student::where('school', '=', 'id')->get();

//			DB::table('student')
//			->join('schools', 'student.school', '=', 'schools.id')
//			->select('student.id', 'student.username', 'student.firstname', 'student.lastname', 'student.age', 'schools.name')
//			->where('student.id', '=', '1')
//			->get();


		//Student::findOrFail($id); //DB::select('SELECT student.id, student.firstname, student.lastname, student.grade, student.age, schools.id, schools.name FROM schools INNER JOIN student ON student.school = schools.id WHERE student.id = '.$id);
		//Student::findOrFail($id); Select * FROM student
	}


}