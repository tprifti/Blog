<?php

class AuthController extends \BaseController {


	/**
	 * Display a listing of the resource.
	 * GET /auth
	 *
	 * @return Response
	 */
	public function getUserLogin()
	{
		return View::make('login');
	}

	/**
	 * Post user login.
	 * POST /login
	 *
	 * @return Response
	 */
	public function postUserLogin()
	{
		$rules = array('username' => 'required|min:4', 'password' => 'required|min:4');

		$validator = Validator::make(Input::all(), $rules);

		if($validator -> passes()){
			$credentials = array(
				'username' => Input::get('username'),
				'password' => Input::get('password')
			);
			if(Auth::user()->attempt($credentials,true)){
				return Redirect::to('/');
			} else {
				return Redirect::to('/login')->withErrors('Username or password invalid');
			}
		} else  {
			return Redirect::to('/login')->withErrors($validator->messages());

		}
	}

	/**
	 * Logout the user.
	 * ANY /logout
	 *
	 * @return Response
	 */
	public function userLogout()
	{
		Auth::user()->logout();
		return Redirect::to('/login');
	}

	/**
	 * Get admin Login
	 * GET /admin/login
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getAdminLogin()
	{
		return View::make('admin.login');


	}

	/**
	 * POST ADMIN LOGIN
	 * POST /admin/login
	 *
	 *
	 * @return Response
	 */
	public function postAdminLogin()
	{
		$rules = array('username' => 'required|min:4', 'password' => 'required|min:4');

		$validator = Validator::make(Input::all(), $rules);

		if($validator -> passes()){
			$credentials = array(
				'username' => Input::get('username'),
				'password' => Input::get('password')
			);
			if(Auth::admin()->attempt($credentials,true)){
				return Redirect::to('/dashboard');
			} else {
				return Redirect::to('/admin/login')->withErrors('Username or password invalid');
			}
		} else  {
			return Redirect::to('/admin/login')->withErrors($validator->messages());

		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /auth/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function AdminLogout()
	{
		Auth::admin()->logout();
		return Redirect::to('/admin/login');

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /auth/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function index(){
		if (Auth::admin()->check()) {

			return View::make('admin.home');
		}
		return Redirect::to('/admin/login');
	}

}