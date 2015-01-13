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

		$student = student::all();

		return View::make('students.index', compact('student'));

	}

	public function show()
	{


		if (Auth::student()->check())
		{
			$id = Auth::student()->id();


			$miles = DB::select('SELECT DISTINCT student.id, student.username, mileage.id AS mid, mileage.activity_name, mileage.total_miles FROM student INNER JOIN mileage_student ON mileage_student.student_id = student.id INNER JOIN mileage ON mileage.id = mileage_student.mileage_id WHERE student.id = ' . $id);
			$gooddeeds = DB::select('SELECT student.id, student.username, gooddeeds.deed_name, gooddeeds.score FROM student INNER JOIN gooddeed_student ON gooddeed_student.student_id = student.id INNER JOIN gooddeeds ON gooddeeds.id = gooddeed_student.gooddeed_id WHERE student.id = ' . $id);
			$rmiles = Student::find(1)->miles()->orderBy('date', 'DESC')->take(7)->get();

			return View::make('students.show', compact('stu', 'miles', 'gooddeeds', 'rmiles'));
		}

		dd('problem');
		//return Redirect::home()->with('flash_message', 'Login Attempt Failed');

	}

	public function dash(){

//		Auth::student()->get()->id
		//$auth = Auth::student()->get();

		$stu = Student::find($id);

		$miles = DB::select('SELECT DISTINCT student.id, student.username, mileage.id AS mid, mileage.activity_name, mileage.total_miles FROM student INNER JOIN mileage_student ON mileage_student.student_id = student.id INNER JOIN mileage ON mileage.id = mileage_student.mileage_id WHERE student.id = '.$id);
		//$miles = DB::select('SELECT student.id, DAYNAME(mileage.date) AS day, DATE(mileage.date) as date, count(mileage.id) as count FROM mileage INNER JOIN mileage_student ON mileage_student.mileage_id INNER JOIN student ON student.id = mileage_student.student_id WHERE student.id = 1 GROUP BY day ORDER BY mileage.date DESC LIMIT 3');

		$gooddeeds = DB::select('SELECT student.id, student.username, gooddeeds.deed_name, gooddeeds.score FROM student INNER JOIN gooddeed_student ON gooddeed_student.student_id = student.id INNER JOIN gooddeeds ON gooddeeds.id = gooddeed_student.gooddeed_id WHERE student.id = '.$id);

//

		return View::make('students.show', compact('stu', 'miles', 'gooddeeds'));
	}

	public function addMiles(){

	}

//	public function

	public function viewmiles($id){
		$stu = Student::find($id);

		$miles = DB::select('SELECT DISTINCT student.id, student.username, mileage.id AS mid, mileage.activity_name, mileage.total_miles FROM student INNER JOIN mileage_student ON mileage_student.student_id = student.id INNER JOIN mileage ON mileage.id = mileage_student.mileage_id WHERE student.id = '.$id);

		return View::make('students.viewmiles', compact('stu', 'miles'));
	}

	public function viewgooddeeds($id){
		$stu = Student::find($id);

		$gooddeeds = DB::select('SELECT student.id, student.username, gooddeeds.deed_name, gooddeeds.score FROM student INNER JOIN gooddeed_student ON gooddeed_student.student_id = student.id INNER JOIN gooddeeds ON gooddeeds.id = gooddeed_student.gooddeed_id WHERE student.id = '.$id);

		return View::make('students.viewgooddeeds', compact('stu', 'gooddeeds'));
	}

	public function addGoodDeed($id){

	}



	public function removeGoodDeed($id, $gid){

	}

	public function removeMiles($id, $mid){

	}

}