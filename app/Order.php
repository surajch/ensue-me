<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Order extends Model {
	use ValidatingTrait;

	/**
		 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'orders';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'service_id', 
		'status', 
		'user_id'
	];

	protected $rules = [
		'service_id' => 'required | integer',
		'status' => 'required',
		'user_id' => 'required'
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}
