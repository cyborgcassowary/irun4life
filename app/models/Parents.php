<?php //namespace iRun4Life\Parents\Parents

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Eloquent, Hash;

class Parents extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;


	protected $fillable = ['firstname', 'lastname', 'email', 'password'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'parents';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token'); //

	public function setPasswordAttribute($password){
		$this->attributes['password'] = Hash::make($password);
	}

	public static function register($firstname, $lastname, $email, $password)
	{
		$parent = new static(compact('firstname', 'lastname', 'email', 'password'));

		// raise an event
	}


}
