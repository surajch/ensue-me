<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Address extends Model {
	use ValidatingTrait;


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'addresses';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'user_id', 
		'address1', 
		'address2', 
		'city',
		'state',
		'country',
		'pin',
		'phone',
		'landmark'
	];

	protected $rules = [
		'user_id' => 'required | integer',
		'address1' => 'required',
		'address2' => '',
		'city' => 'required',
		'country' => 'required',
		'pin' => 'required | integer',
		'phone' => 'required | integer',
		'landmark' => ''
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}
