<?php

use Illuminate\Routing\Controller;

class StudentSessionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /studentsessions
	 *
	 * @return Response
	 */
	public function index($id)
	{
		if(Auth::student()) return Redirect::to('/studentdash');

		$stu = Student::find($id);

		$miles = DB::select('SELECT DISTINCT student.id, student.username, mileage.id AS mid, mileage.activity_name, mileage.total_miles FROM student INNER JOIN mileage_student ON mileage_student.student_id = student.id INNER JOIN mileage ON mileage.id = mileage_student.mileage_id WHERE student.id = '.$id);
		$gooddeeds = DB::select('SELECT student.id, student.username, gooddeeds.deed_name, gooddeeds.score FROM student INNER JOIN gooddeed_student ON gooddeed_student.student_id = student.id INNER JOIN gooddeeds ON gooddeeds.id = gooddeed_student.gooddeed_id WHERE student.id = '.$id);

		return View::make('student.show', compact('stu', 'miles', 'gooddeeds'));


	}

	public function create()
	{
		//if(Auth::user()) return Redirect::to('/admin');

		return View::make('studentsessions.index');
	}

	public function store()
	{
		$input = Input::all();

		$attempt = Auth::student()->attempt(array(
			'username'     => $input['username'],
			'password'  => $input['password']
		));

		if ($attempt) return 'Welcome '. Auth::student()->get()->username; //Redirect::intended('/');

		dd('problem');
	}

	/**
	 * Display the specified resource.
	 * GET /studentsessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /studentsessions/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /studentsessions/{id}
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
	 * DELETE /studentsessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}