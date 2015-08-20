<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class City extends Model {
	use ValidatingTrait;
	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'cities';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
	];

	protected $rules = [
	];

	public function state()
    {
        return $this->belongsTo('App\State');
    }
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}