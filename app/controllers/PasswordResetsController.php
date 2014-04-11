<?php

class PasswordResetsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//creating the view to allow users to reset their password
		return View::make('password_resets.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//Pass our credentials into this Password::remind() library
		//Password remind is actually going to send our user a reminder email
		//What Password remind does, is fetching the user from the users table and it sends them a password reset email
		Password::remind(['email' => Input::get('email')]);

		return Redirect::route('password_resets.create')->withSuccess('true');
	}

	public function reset($token)
	{
		return View::make('password_resets.reset')->withToken($token);
	}

	public function postReset()
	{
		//first we will grab out credentials (much like the $data and $input variable that we used in other controllers)
		$creds = [
			'email' => Input::get('email'),
			'password' => Input::get('password'),
			'password_confirmation' => Input::get('password_confirmation')
		];

		return Password::reset($creds, function($user, $password)
		{
			$user->password = Hash::make($password);
			$user->save();

			return Redirect::to('/');
		});
	}


	/**
	 * Display the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}