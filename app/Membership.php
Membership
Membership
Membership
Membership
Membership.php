<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'memberships';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 
		'subscription_price_per_month'
	];


	protected $rules = [
		'name' => 'required',
		'address1' => 'required'
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}
