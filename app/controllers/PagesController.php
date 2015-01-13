<?php

class PagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function getHome()
	{
		return View::make('pages.home');


		if (Auth::student()->attempt(array('username' => $username, 'password' => $password), true))
		{
			return Redirect::to('student.show');
		}

		if (Auth::parent()->attempt(array('email' => $email, 'password' => $password), true))
		{
			return Redirect::to('parent.index');
		}
	}

	public function adminlogin()
	{
		return View::make('pages.adminlogin');
	}

	public function studenthome(){
		$student = student::all();

		return View::make('students.index', compact('student'));
	}

}
