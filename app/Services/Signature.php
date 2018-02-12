<?php
/**
 * Project kyese.com.
 * PC OWNER: JOSIAH
 * Date: 12/31/2017
 * Time: 6:02 PM
 */

namespace App\Kyese\Supports;
use Illuminate\Support\Facades\Auth;

class Signature
{
    static function check() {
        $redirect_url = url()->current();
        if( !Auth::check() ) {
            return redirect("/login?rd={$redirect_url}/");
        } else {
            return true;
        }
    }
}