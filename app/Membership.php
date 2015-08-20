<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Membership extends Model {
use ValidatingTrait;
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
		'name' => 'required'
		];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}

