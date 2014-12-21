<?php

//use basicAuth\Repo\UserRepositoryInterface;
//use basicAuth\formValidation\RegistrationForm;
use iRun4Life\Forms\RegistrationForm;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
//use Laracasts\Commander\CommandBus;

class RegistrationController extends \BaseController {

	/**
	 * @var $user
	 */
//	protected $user;

	/**
	 * @var RegistrationForm
	 * Parents are able to create a account... This is where
	 */
	//private $commandBus;

	private $registrationForm;


	function __construct( RegistrationForm $registrationForm) //CommandBus $commandBus,
	{
		$this->registrationForm = $registrationForm;


		$this->beforeFilter('guest');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registration.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$this->registrationForm->validate(Input::all());

		$parent = Parents::create(
			Input::only('firstname', 'lastname', 'email', 'password')
		);

		Auth::login($parent);

		Flash::overlay('Glad to have you as a new iRun4Life Parent!');

		return Redirect::home()->with('flash_message', 'Welcome aboard!');

	}

}