<?php namespace App;

//use Illuminate\Database\Eloquent\Model;
use EchoIt\JsonApi\Model;
use Watson\Validating\ValidatingTrait;

class Country extends Model {

	use ValidatingTrait;

	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'countries';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
	];

	protected $rules = [
	];

	public function states()
    {
        return $this->hasMany('App\State');
    }


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	public function scopeBuildQuery($query)
	{
		return $query;
	}


}