<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserVerification extends Model
{

	protected $table = 'users_verifications';

	protected $fillable = [
		'verifications', 'user_id', 'code', 'token', 'expired', 'status', 'code_request_times'
	];

	public static function findOrCreate($userId, array $data = [])
	{
		$existing = parent::whereUserId($userId)->first();
		if ($existing) {
			$verifications = json_decode($existing->verifications);

			foreach ($data as $key => $value) {
				$existing->$key = $value;
			}

			foreach ($data['verifications'] as $key => $value) {
				$verifications->$key = $value;
			}

			$existing->verifications = json_encode($verifications);
			$existing->save();

			return $existing;
		}

		return parent::create([
			'user_id' => $userId,
			'code' => $data['code'],
			'token' => $data['token'],
			'expired' => $data['expired'],
			'status' => 1,
			'verifications' => json_encode($data['verifications'])
		]);
	}

	public static function getVerifications($userId, $verificationData = false)
	{
		$userVerifications = parent::whereUserId($userId)->first();
		$verifications = json_decode($userVerifications->verifications);
		if ($verificationData == true)
			return $userVerifications;

		return $verifications;
	}

	public static function updateVerifications($userId, array $data)
	{
		$userVerifications = self::getVerifications($userId,true);
		$verifications = json_decode($userVerifications->verifications);
		foreach ($data as $key => $value) {
			$verifications->$key = $value;
		}

		$userVerifications->verifications = json_encode($verifications);
		if ($userVerifications->save()) {
			return $userVerifications;
		}

		return false;
	}
}
