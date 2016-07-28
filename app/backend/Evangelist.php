<?php

namespace Ghitter;

use Ghitter\Model;
use GuzzleHttp\Client as GC;
use Dotenv\Dotenv as DE;
use Ghitter\Post as P;

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
    $allowed = [
      'name',
      'email',
      'html_url',
      'avatar_url',
      'company',
      'location',
      'login'
    ];

		foreach ($allowed as $allow) {
			$this->{$allow} = $data[$allow];
		}
		$this->fb_posts = array_map(function ($data) {
			if ($data['message'] == null) {
				$data["message"] = $data["story"];
				unset($data["story"]);

			}
			return new P($data);
		}, $this->getFacebookPosts());
	}

	public function encode()
	{
		return json_encode($this);
	}

	public function getFacebookPosts()
	{
		$endpoint = "https://graph.facebook.com/v2.2/me?access_token=" . getenv("FACEBOOK_ACCESS_TOKEN") . "&fields=posts";
		$client = new GC();
		return json_decode($client->request('GET', $endpoint)->getBody(), true)["posts"]["data"];
	}
}