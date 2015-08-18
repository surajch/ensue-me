<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'service_categories';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name'
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
