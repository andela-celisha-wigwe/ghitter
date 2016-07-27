<?php

namespace Ghitter;

use Ghitter\Model;
use GuzzleHttp\Client as GC;
use Dotenv\Dotenv as DE;

/**
* Evangelist Client
*/
class Evangelist
{	
	public function __construct($username)
	{
    $dotenv = new DE(__DIR__ . "/../../");
		$client = new GC();
    $dotenv->load();
		$data = $client->request('GET', "https://api.github.com/users/$username?client_id=" . getenv("CLIENT_ID") . "&client_secret=" . getenv("CLIENT_SECRET"))->getBody();

		$data = json_decode($data, true);
		foreach ($data as $property => $value) {
			$this->{$property} = $value;
		}
	}

	public function encode()
	{
		return json_encode($this);
	}
}