<?php
/**
 * Project kyese.com.
 * PC OWNER: JOSIAH
 * Date: 1/1/2018
 * Time: 5:43 PM
 */

namespace App\Kyese\Services;

use App\Kyese\Configs\SmsConfig;
use Ixudra\Curl\Facades\Curl;

class SmsService
{
	protected $provider = null;
	protected $error;
	protected $balance;
	protected $response;

	function __construct($provider = null)
	{
		$config = SmsConfig::instance();
		if (is_null($provider)) {
			$this->provider = 'smartxmx';
		}

		if ($config->get('provider') == $provider) {
			$this->provider = $provider;
		}
		else {
			$this->error = "Invalid provider [{$provider}] supplied. Kyese supports only smartxmx provider at the moment.";
		}
	}

	public static function getInstance()
	{
		return new SmsService();
	}

	/**
	 * @param array $params
	 * @return mixed
	 */
	public function send(array $params = [])
	{
		if (!is_null($this->provider) && $this->provider == 'smartxmx') {
			$config = SmsConfig::instance();
			$params['token'] = $config->get('token');
			$params['routing'] = 3;

			$response = Curl::to($config->get('url'))->withData($params)->post();
			$result = explode('||', $response);

			if (count($result) > 1 && $result[0] == '1000') {
				$sms = json_decode($result[1]);
				$this->response = $sms;
			}
			else {
				$this->response = $response;
				$this->error = $response;
			}
		}
		else {
			if (!is_null($this->provider)):
				$this->response = "Specified provider [{$this->provider}], not available in kyese configs. Please add it.";
			    $this->error = $this->response;
			endif;
		}

		return $this;
	}

    public static function dispatch(array $data)
    {
        return self::getInstance()->send($data);
	}

	/**
	 * @return mixed
	 */
	public function getError()
	{
		return $this->error;
	}

	/**
	 * @return string|null
	 */
	public function getProvider()
	{
		return $this->provider;
	}

	/**
	 * @param  string $index
	 * @return mixed
	 */
	public function getResponse($index = null)
	{
		if (!is_null($index) && is_array($this->response)) {
			return $this->response->$index;
		}

		return $this->response;
	}

	public static function getBalance()
	{
		$self = self::getInstance();
		$config = SmsConfig::instance();

		switch ($self->provider) {
			case 'smartxmx':
				return Curl::to($config->get('url'))
                    ->withData([ 'checkbalance' => 1, 'token' => $config->get('token') ])
                    ->post();
				break;
			default:
				return null;
				break;
		}
	}

	public function asJson()
	{
		return response()->json($this->response);
	}
}