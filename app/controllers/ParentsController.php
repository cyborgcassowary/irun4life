<?php

use Illuminate\Routing\Controller;

class ParentsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /parents
	 *
	 * @return Response
	 */
	public function index()
	{
		$dir = Student::find($id);



		return View::make('student.show', compact('dir'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /parents/create
	 *
	 * @return Response
	 */


	/**
	 * Store a newly created resource in storage.
	 * POST /parents
	 *
	 * @return Response
	 */
	public function store()
	{
		//



	}

	/**
	 * Display the specified resource.
	 * GET /parents/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$parent = Parents::find($id);

		//$miles = DB::select('SELECT DISTINCT student.id, student.username, mileage.id AS mid, mileage.activity_name, mileage.total_miles FROM student INNER JOIN mileage_student ON mileage_student.student_id = student.id INNER JOIN mileage ON mileage.id = mileage_student.mileage_id WHERE student.id = '.$id);
		//$gooddeeds = DB::select('SELECT student.id, student.username, gooddeeds.deed_name, gooddeeds.score FROM student INNER JOIN gooddeeds_student ON gooddeeds_student.student_id = student.id INNER JOIN gooddeeds ON gooddeeds.id = gooddeeds_student.gooddeeds_id WHERE student.id = '.$id .' ORDER BY gooddeeds.created_at DESC'); //
		//$rmiles = Student::find(1)->miles()->orderBy('created_at', 'DESC')->take(5)->get();

		$students = DB::select('SELECT DISTINCT parent_student.id AS ps_id, student.firstname AS firstname, student.lastname AS lastname, parents.id AS parent_id FROM student INNER JOIN parent_student ON parent_student.student_id = student.id INNER JOIN parents ON parent_student.parent_id = parents.id WHERE parent_id = '.$id);
		$count = DB::select('SELECT DISTINCT parent_student.id AS ps_id, count(student.id) as count FROM student INNER JOIN parent_student ON parent_student.student_id = student.id INNER JOIN parents ON parent_student.parent_id = parents.id WHERE parent_id = '. $id);
		return View::make('parent.show', compact('parent', 'students', 'count'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /parents/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	public function createStudent(){

		$this->createStudentForm->validate(Input::all());

		//$student = Student::first();



		$student = Mileage::create(

			Input::only('username', 'firstname', 'lastname', '')

		);

		//$users = DB::table('users')->get();

		$student->parent()->attach($student->id);

		//$miles->id


//		$this->registrationForm->validate(Input::all());
//
//		$parent = Parents::create(
//			Input::only('firstname', 'lastname', 'email', 'password')
//		);

		Flash::overlay('Your miles have been added. '. $miles->date );

		return Redirect::to('student/1')->with('flash_message', 'Your miles have been added.');

	}




	/**
	 * Update the specified resource in storage.
	 * PUT /parents/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /parents/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}