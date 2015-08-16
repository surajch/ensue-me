<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_info';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'company_name', 
		'company_address1', 
		'company_address2', 
		'city',
		'state',
		'country',
		'pin',
		'description',
		'phone'
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}
