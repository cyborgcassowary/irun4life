<?php

//use Illuminate\Routing\Controller;
//
//class DirectorSessionsController extends Controller {
class DirectorSessionsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /directorsessions
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$school = DB::select('select * FROM schools where id = ?', array(1));

		$students = DB::select('select * from student where school_id = ?', array(1));

		//$students = Student::where('school_id', '=', 1);

		//return $school;
		return View::make('director.index', compact('students', 'school'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /directorsessions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /directorsessions
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /directorsessions/{id}
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
	 * GET /directorsessions/{id}/edit
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
	 * PUT /directorsessions/{id}
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
	 * DELETE /directorsessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}