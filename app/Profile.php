<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Profile extends Model {
	use ValidatingTrait;

	/**
		 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'profiles';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'user_id',
        'username',
        'uid',
        'access_token',
        'access_token_secret'
        
	];

	protected $rules = [
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */


	public function user()
    {
        return $this->belongsTo('App\User');
    }

}
