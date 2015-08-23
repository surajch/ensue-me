<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('/test', 'TestController@index');
Route::get('/home', 'HomeController@index');

Route::get('facebook', 'AccountController@facebook_redirect');
Route::get('account/facebook', 'AccountController@facebook');

Route::group(['prefix' => 'dashboard'], function(){
	Route::get('/', 'HomeController@index');
	Route::resource('/profile', 'ProfileController');
	Route::post('/profile-photo', 'ImageController@getImage');
	Route::resource('/address', 'AddressController');
	Route::resource('/membership', 'MembershipController');
	Route::resource('/order', 'OrderController');
	Route::resource('/role', 'RoleController');
	Route::resource('/service-category', 'ServiceCategoryController');
	Route::resource('/service', 'ServiceController');
	Route::resource('/user-service-bucket', 'UserServiceBucketController');
});



Route::group(['prefix' => 'api/v1', 'namespace' => 'api\v1'], function(){
	Route::any('{model}/{id?}', 'ApiController@handleRequest');
});



Route::get('login/fb', function() {
    $facebook = new Facebook(Config::get('facebook'));
    $params = array(
        'redirect_uri' => url('/login/fb/callback'),
        'scope' => 'email',
        'fields'=>'email'
    );
    return Redirect::to($facebook->getLoginUrl($params));
});


Route::get('login/fb/callback', function() {
    $code = \Input::get('code');
    if (strlen($code) == 0) return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');

    $facebook = new Facebook(Config::get('facebook'));
    $uid = $facebook->getUser();

    if ($uid == 0) return \Redirect::to('/')->with('message', 'There was an error');

    $me = $facebook->api('/me?fields=email,name');

    $profile = App\Profile::whereUid($uid)->first();
    if (empty($profile)) {

        $user = new App\User;
        $user->name = $me['name'];
        $user->email = $me['email'];
       //$user->photo = 'https://graph.facebook.com/'.$me['username'].'/picture?type=large';

        $user->save();

        $profile = new App\Profile;
        $profile->uid = $uid;
        $profile->user_id = $user->id;
        $profile->username = $me['name'];
        //$profile = $user->profiles()->save($profile);
    }

    $profile->access_token = $facebook->getAccessToken();
    $profile->save();

    $user = $profile->user;

    \Auth::login($user);

    \Flash::success('Logged in succesfully with facebook');

    return \Redirect::to('/dashboard');
});

Route::get('/tables', function()
{
	return View::make('table');
});

Route::get('/hometest', function()
{
	return View::make('home');
});

Route::get('/forms', function()
{
	return View::make('form');
});

Route::get('/grid', function()
{
	return View::make('grid');
});

Route::get('/buttons', function()
{
	return View::make('buttons');
});


Route::get('/icons', function()
{
	return View::make('icons');
});

Route::get('/panels', function()
{
	return View::make('panel');
});

Route::get('/typography', function()
{
	return View::make('typography');
});

Route::get('/notifications', function()
{
	return View::make('notifications');
});

Route::get('/blank', function()
{
	return View::make('blank');
});

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/documentation', function()
{
	return View::make('documentation');
});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);