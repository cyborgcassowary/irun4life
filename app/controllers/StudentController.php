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


		$student = Student::all();



		return View::make('student.index', compact('student'));




	}

	public function show($id)
	{

		$stu = Student::find($id);

		$miles = DB::select('SELECT DISTINCT student.id, student.username, mileage.id AS mid, mileage.activity_name, mileage.total_miles FROM student INNER JOIN mileage_student ON mileage_student.student_id = student.id INNER JOIN mileage ON mileage.id = mileage_student.mileage_id WHERE student.id = '.$id);
		$gooddeeds = DB::select('SELECT student.id, student.username, gooddeeds.deed_name, gooddeeds.score FROM student INNER JOIN gooddeed_student ON gooddeed_student.student_id = student.id INNER JOIN gooddeeds ON gooddeeds.id = gooddeed_student.gooddeed_id WHERE student.id = '.$id);



		return View::make('student.show', compact('stu', 'miles', 'gooddeeds'));

	}

	public function dash(){

//		Auth::student()->get()->id
		//$auth = Auth::student()->get();

		$stu = Student::find($id);

		$miles = DB::select('SELECT DISTINCT student.id, student.username, mileage.id AS mid, mileage.activity_name, mileage.total_miles FROM student INNER JOIN mileage_student ON mileage_student.student_id = student.id INNER JOIN mileage ON mileage.id = mileage_student.mileage_id WHERE student.id = '.$id);
		//$miles = DB::select('SELECT student.id, DAYNAME(mileage.date) AS day, DATE(mileage.date) as date, count(mileage.id) as count FROM mileage INNER JOIN mileage_student ON mileage_student.mileage_id INNER JOIN student ON student.id = mileage_student.student_id WHERE student.id = 1 GROUP BY day ORDER BY mileage.date DESC LIMIT 3');

		$gooddeeds = DB::select('SELECT student.id, student.username, gooddeeds.deed_name, gooddeeds.score FROM student INNER JOIN gooddeed_student ON gooddeed_student.student_id = student.id INNER JOIN gooddeeds ON gooddeeds.id = gooddeed_student.gooddeed_id WHERE student.id = '.$id);

//

		return View::make('student.show', compact('stu', 'miles', 'gooddeeds'));
	}

//	public function

	public function viewmiles($id){
		$stu = Student::find($id);

		$miles = DB::select('SELECT DISTINCT student.id, student.username, mileage.id AS mid, mileage.activity_name, mileage.total_miles FROM student INNER JOIN mileage_student ON mileage_student.student_id = student.id INNER JOIN mileage ON mileage.id = mileage_student.mileage_id WHERE student.id = '.$id);

		return View::make('student.viewmiles', compact('stu', 'miles'));
	}

	public function viewgooddeeds($id){
		$stu = Student::find($id);

		$gooddeeds = DB::select('SELECT student.id, student.username, gooddeeds.deed_name, gooddeeds.score FROM student INNER JOIN gooddeed_student ON gooddeed_student.student_id = student.id INNER JOIN gooddeeds ON gooddeeds.id = gooddeed_student.gooddeed_id WHERE student.id = '.$id);

		return View::make('student.viewgooddeeds', compact('stu', 'gooddeeds'));
	}

	public function addGoodDeed($id){

	}

	public function addMiles($id, $mid){

	}


	public function removeGoodDeed($id, $gid){

	}

	public function removeMiles($id, $mid){

	}

}