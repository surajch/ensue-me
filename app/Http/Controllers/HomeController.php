<?php namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;

class HomeController extends BaseController {

	public function index()
	{
		return view('dashboard/home');
	}

}
