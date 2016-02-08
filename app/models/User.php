<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public $errors;

	public static $rules = [
		'username' => 'required|unique:users|alpha_dash|min:4',
		'email' => 'required|email|unique:users',
		'password' => 'required|alpha_num|min:6',
		'password_repeat' => 'required|same:password'
	];

	private $messages = array(
		'required' => ':attribute is required!',
		'unique' => 'This :attribute is taken!',
		'alpha_dash' => 'This :attribute can contain only a-z, A-Z, 0-9 , - and _ ',
		'alpha_num' => 'This :attribute should contain at least one number.',
		'min:6' => 'This :attribute need to be :value characters',
		'email' => 'Email is not valid . Ex: example@example.com',
		'same' => 'This :other should be the same as :attribute',

	);

	public function isValid($data)
	{
		$validator = Validator::make($data, static::$rules, $this->messages);
		if ($validator->passes()) return true;

		$this->errors = $validator->messages();
		return false;

	}


}
