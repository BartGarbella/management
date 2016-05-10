<?php 


class Config
{
	private $instance;


	private function __construct()
	{
		
	}


	private function __clone()
	{
		
	}

	public static function getInstance() {
		if ($this->instance === null) {
			$this->instance = new self;
		}
		return $instance;
	}
}