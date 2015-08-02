<?php namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;

class WelcomeController extends Controller {


	public function index()
	{
		if(\Auth::user())
			return \Redirect::to('/home');

		return view('welcome');
	}

}
