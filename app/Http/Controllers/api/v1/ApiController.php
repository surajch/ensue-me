<?php namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

/**
* 
*/
class ApiController extends Controller
{
		
	function __construct()
	{
		
	}

	public function index($query=null){
		echo "$query";
	}
}