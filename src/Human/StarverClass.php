<?php

// IMPORTANT
// only my ideas, not working
// ALL TO REFACTORING
namespace App\Human;

use App\Utilities\CalculateTime;

class StarverClass
{
	use CalculateTime;
	
	private $id;
	private $name;
	private $energy;
	private $famine;

	private $fromDate;
	private $toDate;

	private static $period;
	
	public function __construct()
	{
		$this->setToDate(  '2020-02-28 22:00:00');
		$this->setFromDate('2020-02-28 20:00:00');
	}
	
	public function setToDate(string $date)
	{
		$this->toDate = $date;
	}

	public function setFromDate(string $date)
	{
		$this->fromDate = $date;
	}

	public function setFamine(int $famine)
	{
		$this->famine = $famine;
	}

	public function addFamine()
	{
		$timeSets  = $this->countTimeSets(30);

		return $timeSets;
	}

	private function setStarvation(int $starvation)
	{
		return $famine += $starvation;
	}
}