<?php

//use iRun4Life\Forms\RegistrationForm;
use iRun4Life\Forms\addMileageForm;
use Laracasts\Flash\Flash;

class StudentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /student
	 *
	 * @return Response
	 */

	private $addMileageForm;

	function __construct( addMileageForm $addMileageForm) //CommandBus $commandBus,
	{
		$this->addMileageForm = $addMileageForm;

		$this->beforeFilter('student');
	}


	public function index()
	{

		$student = student::all();

		return View::make('students.index', compact('student'));

	}

	public function show($id)
	{

		$stu = Student::find($id);

		$miles = DB::select('SELECT DISTINCT student.id, student.username, mileage.id AS mid, mileage.activity_name, mileage.total_miles FROM student INNER JOIN mileage_student ON mileage_student.student_id = student.id INNER JOIN mileage ON mileage.id = mileage_student.mileage_id WHERE student.id = '.$id);
		$gooddeeds = DB::select('SELECT student.id, student.username, gooddeeds.deed_name, gooddeeds.score FROM student INNER JOIN gooddeed_student ON gooddeed_student.student_id = student.id INNER JOIN gooddeeds ON gooddeeds.id = gooddeed_student.gooddeed_id WHERE student.id = '.$id);
		$rmiles = Student::find(1)->miles()->orderBy('date', 'DESC')->take(5)->get();

		return View::make('students.show', compact('stu', 'miles', 'gooddeeds', 'rmiles'));

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

	public function student(){


	}


//	public function

	public function viewmiles($id){
		$stu = Student::find($id);

		//$miles = DB::select('SELECT DISTINCT student.id, student.username, mileage.id AS mid, mileage.activity_name, mileage.total_miles FROM student INNER JOIN mileage_student ON mileage_student.student_id = student.id INNER JOIN mileage ON mileage.id = mileage_student.mileage_id WHERE student.id = '.$id);
		$rmiles = Student::find(1)->miles()->orderBy('date', 'DESC')->get();
		return View::make('students.viewmiles', compact('stu', 'rmiles'));
	}

	public function viewgooddeeds($id){
		$stu = Student::find($id);

		$gooddeeds = DB::select('SELECT student.id, student.username, gooddeeds.deed_name, gooddeeds.score FROM student INNER JOIN gooddeed_student ON gooddeed_student.student_id = student.id INNER JOIN gooddeeds ON gooddeeds.id = gooddeed_student.gooddeed_id WHERE student.id = '.$id);

		return View::make('students.viewgooddeeds', compact('stu', 'gooddeeds'));
	}

	public function addGoodDeed($id){

	}

	public function milesForm(){
		return View::make('miles.create');
	}

	public function addMiles(){
//		$miles = new Mileage;
//		$miles->activity_name = 'Miles';
//		$miles->total_miles = Input();
//		$miles->date = new DateTime('today');
//		$miles->save();

		$this->addMileageForm->validate(Input::all());

		$miles = Mileage::create(

			Input::only('activity_name', 'total_miles', 'date')

		);


//		$this->registrationForm->validate(Input::all());
//
//		$parent = Parents::create(
//			Input::only('firstname', 'lastname', 'email', 'password')
//		);

		Flash::overlay('You miles have been added');

		return Redirect::to('student/1')->with('flash_message', 'Your miles have been added.');


	}


	public function removeGoodDeed($id, $gid){

	}

	public function removeMiles($id, $mid){

	}

	public function retrieveLatestMiles(){
		return Student::find(1)->miles()->take(1)->orderBy('date', 'DESC')->get();
	}

}