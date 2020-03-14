<?php 
namespace SDSender;
require_once __DIR__ . '\..\vendor\autoload.php';

use GuzzleHttp\Client;

class SDGateway
{
	private $client;

	public function __construct()
	{
		$this->client = new Client();
	}

	public function send(array $data = [])
	{
		$this->client->request('POST', 'https://sdgateway.herokuapp.com/api/device/send/message', ['form_params' => $data]);
	}
}

// Example send message
/*$SDGateway = new SDGateway();
$SDGateway->send([
	'device_id'    => 1,
	'phone_number' => '09672570114',
	'message'      => 'This is from the library!',
]);
*/