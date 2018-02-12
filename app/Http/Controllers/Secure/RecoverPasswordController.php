<?php

namespace App\Http\Controllers\Secure;

use App\Kyese\Services\SmsService;
use App\Kyese\PreControllers\ProcessPasswordRecovery;
use App\Models\PasswordRecoveryLogger;
use App\Models\UserSmsUnit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Mail\Mailer;

class RecoverPasswordController extends Controller
{
    public function index(Request $request, Mailer $mailer)
    {

        return ProcessPasswordRecovery::run($request, $mailer, $this);
    }

    /**
     * @param object PasswordRecoveryLogger $recoveryUser
     * @return mixed
     */
    public function findOrCreateRecoveryLog($recoveryUser)
    {
        $thisUserRecoveryLog = PasswordRecoveryLogger::where('user_id', '=', $recoveryUser->user_id)
            ->where('recovery_type', $recoveryUser->recovery_type)->first();

        if ($thisUserRecoveryLog) {
            $thisUserRecoveryLog->recovery_token = $recoveryUser->recovery_token;
            $thisUserRecoveryLog->expired = time() + 3600;
            $thisUserRecoveryLog->save();

            return $thisUserRecoveryLog;
        }

        return $recoveryUser->save();
    }

    public function recoveryForm($userId, $token)
    {
        $explodedToken = explode('_', $token);
        $newToken = count($explodedToken) > 1 ? $explodedToken : false;

        $userLog = PasswordRecoveryLogger::where('user_id', '=', $userId)
            ->where('recovery_token', '=', $newToken[1])
            ->where('recovery_type', '=', $newToken[0])->first();

        if (!$newToken || !$userLog) {
            alert('_error', "Suspicious page access detected. This link is not valid.");

            return $this->redirect('login');
        }
        if (time() > $userLog->expired ) {
            alert('e', "This link has already expired. Please, request for a new password recovery link.");

            return $this->redirect('login');
        }
        if ($userLog->recovery_status == 'completed') {
            alert('e', "You have already used this link to reset your password. Please, request a new one!");

            return $this->redirect('login');
        }

        $this->assign['body'] = 'auths.new-password';
        $this->assign['only_body'] = true;
        $this->assign['title'] = "Password Recovery";

        return view('wrapper', $this->assign);
    }

    public function saveNewPassword(Request $request)
    {
        return ProcessPasswordRecovery::verifyRecoveryToken($request);
    }

    public function units($userId = null)
    {
        $userUnit = UserSmsUnit::whereUserId($userId)->first();
        //echo $userUnit->balance;
        echo SmsService::getBalance();
    }
}
