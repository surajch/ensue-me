<?php namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\User;

class ProfileController extends BaseController {

	public function index()
	{
		$userData = User::find(\Auth::user()->id);

		return view('dashboard/profile', ['user' => $userData]);
	}

	public function show($id)
	{

	}
	public function update($id)
	{

		$data = \Input::all();
		
		if(empty($data)){	
			return \Redirect::back()->withErrors('Empty data.');
		}
		
		$userObj = User::find($id);
		$userObj->name = $data['name'];
		$userObj->email = $data['email'];

		if(!$userObj->save())
			return \Redirect::back()->withErrors($userObj->getErrors())->withInput();

		return \Redirect::to('/dashboard');

		// $userData = User::find(\Auth::user()->id);

		// return view('dashboard/profile', ['user' => $userData]);
	}

}
