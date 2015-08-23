<?php namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\BaseController;

class TestController extends Controller {


	public function index()
	{

		/*if(\Auth::user())
			return \Redirect::to('/dashboard');
		*/
		return view('test');
	}

	public function view()
    {
        //$users = User::all();
        $users = User::orderBy('id', 'DESC')->paginate(5);
        return view('test')->with('users', $users);
    }

}
