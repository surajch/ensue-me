<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipService extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'membership_service';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'membership_id', 
		'service_id', 
		'frequency_interval', 
		'frequency_count',
		'limit'
	];


	protected $rules = [
		'membership_id' => 'required | integer',
		'service_id' => 'required | integer',
		'frequency_interval' => 'required',
		'frequency_count' => 'required',
		'limit' => 'required',
		
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}
