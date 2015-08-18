<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'services';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 
		'service_category_id', 
		'price_per_month', 
		'details'
	];

	protected $rules = [
		'name' => 'required ',
		'service_category_id' => 'required | integer',
		'price_per_month' =>'required | integer',
		'details' => '',
		];
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}
