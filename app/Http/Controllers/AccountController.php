<?php namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Redirect;
use Socialize;

class AccountController extends Controller {
  // To redirect facebook
  public function facebook_redirect() {
    return Socialize::with('facebook')->redirect();
  }
  // to get authenticate user data
  public function facebook() {
    $user = Socialize::with('facebook')->user();
    // Do your stuff with user data.
    print_r($user);die;
  }
}