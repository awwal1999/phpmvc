<?php
/**
 * 
 */
class Car 
{
	protected static $dataFile;
	protected $inventory = [];

	function __construct()
	{
		self::$dataFile = DATA . 'car.txt';
	}

	private function load()
	{
		if (file_exists(DATA . 'cars.txt')) {
			$this->inventory = file(DATA . 'cars.txt');
		}
	}

	public function getCars()
	{
		$this->load();
		return $this->inventory;
	}
}