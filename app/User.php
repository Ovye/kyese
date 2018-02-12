<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'social_id', 'username', 'social_driver', 'social_token', 'photo', 'online_status', 'account_status', 'profile_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	public static function findOrCreateSocialUser($user, $provider)
	{
		$authUser = User::where('social_id', $user->getId())->first();
		if ($authUser) {
			$authUser->photo = $user->getAvatar();
			$authUser->save();

			return $authUser;
		}
		$name = explode(' ', $user->getName());
		$token = $user->token;

		$data['social_driver'] = $provider;
		$data['name'] = $user->getName();
		$data['email'] = $user->getEmail();
		$data['social_id'] = $user->getId();
		$data['social_token'] = $token;
		$data['username'] = count($name) > 1 ? $name[0] : $user->getName();
		$data['photo'] = $user->getAvatar();

		return User::create($data);
	}
}
