<?php
/**
 * Project kyese.com.
 * PC OWNER: JOSIAH
 * Date: 12/31/2017
 * Time: 7:06 PM
 */

namespace App\Kyese\Supports;


class Assets
{

    static function css(array $path, $version='') {
        return ky_add_styles($path, $version);
    }

    static function js(array $path, $version='') {
        return ky_add_scripts($path, $version);
    }

}