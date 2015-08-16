<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {

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

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}
