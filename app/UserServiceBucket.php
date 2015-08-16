<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserServiceBucket extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_service_bucket';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'user_id', 
		'service_id', 
		'service_remaining', 
		'total_service'
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}