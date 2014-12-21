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
	}

	public function adminlogin()
	{
		return View::make('pages.adminlogin');
	}

}
