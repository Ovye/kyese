<?php
/**
 * Project lakyese.
 * PC OWNER: JOSIAH
 * Date: 12/31/2017
 * Time: 6:50 AM
 */
/**
 *
 * This set lash messages within our app
 * @param $data
 * @param string $pair
 */

if (!function_exists('set_flashdata')) {
    function set_flashdata($data, $pair = '')
    {
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                $_SESSION[$key] = $value;
            }
        }
        else {
            if ($pair != '') {
                $_SESSION[$data] = $pair;
            }
            else {
                trigger_error('Invalid flashdata pattern', E_USER_WARNING);

            }
        }
    }
}

/**
 * @param $sID | The session @var $key
 */
if (!function_exists('get_flashdata')) {
    function get_flashdata($sID)
    {
        if (isset($_SESSION[$sID])) {
            echo $_SESSION[$sID];
            unset($_SESSION[$sID]);
        }
    }
}

if (!function_exists('clear_flashdata')) {
    function clear_flashdata($data_id)
    {
        if (is_array($data_id)) {
            foreach ($data_id as $id) {
                if (isset($_SESSION[$id])) {
                    unset($_SESSION[$id]);
                }
            }
        }
        else {
            if (isset($_SESSION[$data_id])) {
                unset($_SESSION[$data_id]);
            }
        }

        return true;
    }
}

/**
 * @param null $type
 * @param $message | The contents to display as flash
 */
if (!function_exists('alert')) {
    function alert(string $type = null, $message)
    {

        if ($type == 's' || $type == 'success') {
            session()->flash('notice', "<div class='alert alert-success'><a class='close'  data-dismiss='alert'></a> <b class='ky-alert-heading'><i uk-icon='icon: check'></i> Success</b><br/>{$message}</div>");
        }
        elseif ($type == 'e' || $type == 'error') {
            session()->flash('notice', "<div class='alert alert-danger'><a class='close'  data-dismiss='alert'></a> <b class='ky-alert-heading'><i uk-icon='icon: tag'></i> Whoops!!</b><br/>{$message}</div>");
        }
        elseif ($type == 'w' || $type == 'warning') {
            session()->flash('notice', "<div class='alert p-3 alert-warning'><a class='close'  data-dismiss='alert'></a> <b class='ky-alert-heading'><i uk-icon='icon: warning'></i> Warning</b><br/> {$message}</div>");
        }
        elseif ($type == 'n' || $type == 'i' || $type == 'notice' || $type == 'info') {
            session()->flash('notice', "<div class='alert alert-info'><a class='close'  data-dismiss='alert'></a><b class='ky-alert-heading'><i uk-icon='icon: info'></i> Notice</b><br/> {$message}</div>");
        }
        elseif ($type == 'notify') {
            if (is_array($message)) {
                if (isset($message["onShown"])) {
                    $message['onShown'] = str_replace('"', '', $message['onShown']);
                }
                $msg = json_encode($message);
                session()->flash('kNotify', "kNotify({$msg});");
            }
        }
        elseif ($type == '_success') {
            session()->flash('kNotify', "kNotify({type: 'success', message: '{$message}'});");
        }
        elseif ($type == '_error') {
            session()->flash('kNotify', "kNotify({type: 'danger', message: '{$message}'});");
        }
        elseif ($type == '_info') {
            session()->flash('kNotify', "kNotify({type: 'info', message: '{$message}'});");
        }
        elseif ($type == '_warning') {
            session()->flash('kNotify', "kNotify({type: 'warning', message: '{$message}'});");
        }
        else {
            session()->flash('notice', "<div class='alert alert-info mt-5'><a class='close'  data-dismiss='alert'></a><b><i uk-icon='icon: info'></i> Notice</b><br/> {$message}</div>");
        }
    }
}

/**
 * @param array $path
 * @param string $v
 * @return bool|string
 */

function ky_add_scripts(array $path, $v = '')
{

    $publicDir = isset($path['public']) ? $path['public'] : null;
    $viewsDir = isset($path['views']) ? $path['views'] : null;

    if ($v == '') {
        $ver = '';
    }
    else {
        $ver = '?ver=' . $v;
    }
    $gen = '';

    if (isset($path['views']) && is_array($path['views'])) {
        foreach ($path['views'] as $file) {
            $gen .= '<script type="text/javascript" src="' . url('resources/views/' . $file . '.js' . $ver) . '"></script>';
        }
    }
    elseif ($viewsDir) {
        $gen .= "<script type='text/javascript' src='" . url("resouces/views/{$viewsDir}.js" . $ver) . "'></script>";
    }

    if (isset($path['public']) && is_array($path['public'])) {
        foreach ($path['public'] as $file) {
            $gen .= "<script type='text/javascript' src='" . url("public/assets/{$file}.js" . $ver) . "'></script>";
        }
    }
    elseif ($publicDir) {
        $gen .= "<script type='text/javascript' src='" . url("public/assets/{$publicDir}.js" . $ver) .
        "'></script>";
    }

    if (isset($path['links']) && is_array($path['links'])) {
        foreach ($path['links'] as $file) {
            $gen .= "<script type='text/javascript' src='{$file}{$ver}'></script>";
        }
    }
    elseif (isset($path['links'])) {
        $gen .= "<script type='text/javascript' src='{$path['links']}{$ver}'></script>";
    }

    return $gen;
}

function ky_add_styles(array $path, $v = '')
{

    $publicDir = isset($path['public']) ?? $path['public'];
    $viewsDir = isset($path['views']) ?? $path['views'];

    if ($v == '') {
        $ver = '';
    }
    else {
        $ver = '?ver=' . $v;
    }
    $gen = '';

    if (isset($path['views']) && is_array($path['views'])) {
        foreach ($path['views'] as $file) {
            $gen .= "<link rel='stylesheet' href='" . url("resources/views/{$file}.css" . $ver) . "'>";
        }
    }
    elseif ($viewsDir) {
        $gen .= "<link rel='stylesheet' href='" . url("resources/views/{$path['views']}.css" . $ver) . "'>";
    }

    if (isset($path['public']) && is_array($path['public'])) {
        foreach ($path['public'] as $file) {
            $gen .= "<link rel='stylesheet' href='" . url("public/assets/{$file}.css" . $ver) . "'>";
        }
    }
    elseif ($publicDir) {
        $gen .= "<link rel='stylesheet' href='" . url("public/assets/{$path['public']}.css" . $ver) . "'>";
    }

    if (isset($path['links']) && is_array($path['links'])) {
        foreach ($path['links'] as $file) {
            $gen .= "<link rel='stylesheet' href='{$file}{$ver}'>";
        }
    }
    elseif (isset($path['links'])) {
        $gen .= "<link rel='stylesheet' href='{$path['links']}{$ver}'>";
    }

    return $gen;
}

function side_nav_activator($ctrl, $sub = '')
{
    $nav = explode('/', url()->current());
    if (count($nav) > 4 && $ctrl == $nav[4] && $sub != '' && $sub == $nav[5]) {
        $active = 'active k-menu-opened';
    }
    elseif (isset($nav[4]) && $ctrl == $nav[4] && $sub == '') {
        $active = 'active k-menu-opened';
    }
    else {
        $active = '';
    }

    return $active;
}

function url_segment($index)
{
    return Request::segment($index);
}

function user_is($usertype)
{
    $user = auth()->user();
    if (is_array($usertype)) {
        foreach ($usertype as $type) {
            if ($type == $user->type || $type == $user->added_type) {
                return true;
            }

            return false;
        }
    }
    elseif ($user->type == $usertype || $user->added_type == $usertype) {
        return true;
    }

    return false;
}

/**
 * Generate random numeric values. Specify length to control the number characters to show.
 * @param int $length
 * @return int
 */
function random_numbers($length = 7)
{
    $result = substr(str_shuffle(str_repeat('0123456789', $length)), 0, $length);

    return (integer) $result;
}

if (!function_exists('get')) {
    function get($index)
    {
        return isset($_GET[$index]) ? trim($_GET[$index]) : null;
    }
}

if (!function_exists('post')) {
    function post($index)
    {
        return isset($_POST[$index]) ? trim($_POST[$index]) : null;
    }
}

if (!function_exists('get_config')) {
    function get_config($index, $provider = null)
    {
        if ($index == 'sms') {
            if ($provider == null) {
                trigger_error("A valid provider is required.", E_NOTICE);
            }

            return \App\Kyese\Supports\Config::forSms($provider);
        }
        else {
            return \App\Kyese\Supports\Config::get($index);
        }
    }
}

if (!function_exists('active_for')) {
    function active_for($path)
    {
        return $path == rtrim(request()->route()->uri(), '/') ?? "ky-active open active";
    }
}