<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordRecoveryLogger extends Model
{
    protected $table = 'password_recoveries';

    protected $fillable = ['user_id', 'recovery_token', 'recovery_type', 'recovery_status', 'expired'];

    public static function getUserLog(array $conditions)
    {
        return PasswordRecoveryLogger::where('user_id', $conditions['user_id'])
            ->where('recovery_token', $conditions['token'])
            ->where('recovery_type', $conditions['type'])->first();
    }

    public static function createUserLog(array $data = [])
    {
        if (!is_null($data)) {
            return self::create($data);
        }

        return new self();
    }
}
