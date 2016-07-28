<?php

namespace Ghitter;

/**
* Evangelist Client
*/
class Post
{	
	public function __construct($data)
	{	
		foreach ($data as $property => $value) {
			$this->{$property} = $value;
		}
	}
}