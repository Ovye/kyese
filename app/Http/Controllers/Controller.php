<?php

namespace App\Http\Controllers;

use App\Kyese\Supports\Assets;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $assign = [];

    public function redirect($to = null, int $status= 302, array $headers = [], $secure = false ) {
        return redirect($to, $status, $headers, $secure);
    }

    public function goBack(int $status=302, array $headers = [], bool $fallback = false)
    {
        return back($status, $headers, $fallback);
    }

    public function loadScripts($scripts, $version='')
    {
        return $this->assign['scripts'] = Assets::js($scripts, $version);
    }

    public function loadStyles($styles, $version = '')
    {
        return $this->assign['styles'] = Assets::css($styles, $version);
    }
}
