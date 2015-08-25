<?php namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;

class WelcomeController extends Controller {


	public function index()
	{
		if(\Auth::user())
			return \Redirect::to('/dashboard');

		return view('welcome');
	}

}
