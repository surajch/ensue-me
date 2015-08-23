<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Role extends Model {
	use ValidatingTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'roles';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'type'
	];


	protected $rules = [
		'type' => 'required'
	];


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}
