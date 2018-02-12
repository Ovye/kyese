<?php
/**
 * Project kyese.com.
 * PC OWNER: JOSIAH
 * Date: 1/1/2018
 * Time: 11:31 PM
 */

namespace App\Kyese\Supports;


class Stringer
{
    public static function serial($separator='-'){

        $tokens = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

        $serial = '';

        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 5; $j++) {
                $serial .= $tokens[rand(0, 35)];
            }

            if ($i < 3) {
                $serial .= $separator;
            }
        }

        return $serial;

    }

    public static function random($length) {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));

        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }

        return $key;
    }

    public static function randomAlpha($length){

        $s = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", $length)), 0, $length);

        return $s;

    }

    public static function randomPin($length) {
        return substr(md5(str_shuffle(rand(2010022, 220002))), 0, $length);
    }
}