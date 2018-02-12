<?php
/**
 * Project kyese.com.
 * PC OWNER: JOSIAH
 * Date: 1/22/2018
 * Time: 12:44 PM
 */

namespace App\Kyese\Configs;

use App\Kyese\Supports\Config;

class SmsConfig extends Config
{

    public static function instance()
    {
        return new SmsConfig();
    }

    public function get($index)
    {
        $config = $this->setup('sms', ['provider' => 'smartxmx']);

        return $config ?? $config->$index;
    }

    public function setup(string $type, array $param = [])
    {
        $sms = parent::init('sms');
        $configs = json_decode($sms);

        foreach ($configs as $config) {
            if (!empty($param['provider'])
                && $config->provider == $param['provider']
                || $config->is_default = 1) {
                return $config;
            }

            return $config;
        }

        return null;
    }

}
