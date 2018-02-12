<?php
/**
 * Project kyese.com.
 * PC OWNER: JOSIAH
 * Date: 1/1/2018
 * Time: 5:12 PM
 */

namespace App\Kyese\Supports;

use App\Kyese\Configs\SmsConfig;
use ORM as DB;

abstract class Config
{

	public static $table = 'configs';

	public function __construct($config_index = null)
	{
		if (!empty($config_index)) {
			$config = self::init()->where('index', $config_index)->find_one();

			return $config->value;
		}

		return null;
	}

	public static function init($config_index = null)
	{
		if (!empty($config_index)) {
			$config = self::init()->where('index', $config_index)->find_one();

			return $config->value;
		}

		return DB::for_table(self::$table);
	}

	public function setup(string $type, array $param = [])
	{
		if ($type == 'sms') {
			return SmsConfig::instance()->setup($type, $param);
		}

		return null;
	}
}
