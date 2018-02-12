<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSmsUnit extends Model
{
	protected $table = 'users_sms_units';


	protected $fillable = [ 'user_id', 'balance', 'status' ];

	public static function findOrCreate($user, array $data = [])
	{
		$clause = is_object($user) ? $user->id : $user;
		$existing = parent::whereUserId($clause)->first();
		if ($existing)
			return $existing;

		if (empty($data)) {
			$newUser = new UserSmsUnit();
			$newUser->user_id = $clause;
			$newUser->balance = 5;
			$newUser->status = 0;
			$newUser->save();

			return $newUser;
		}

		return parent::create($data);
	}
}
