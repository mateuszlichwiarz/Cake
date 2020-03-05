<?php

// IMPORTANT
// only my ideas, not working
// ALL TO REFACTORING
namespace App\Human;

use App\Utilities\CalculateTime;
use App\Human\AbstractHuman;

class StarverClass extends AbstractHuman
{
	use CalculateTime;
	
	private $id;
	private $starvation;

	private $fromDate;
	private $toDate;
	
	public function __construct()
	{
		$this->setToDate(  '2020-02-28 22:00:00');
		$this->setFromDate('2020-02-28 20:00:00');
	}
	
	public function getStatus()
	{
		$name = $this->getName();
		$energy = $this->getEnergy();
		$status = $name.' - '.$energy.' energy lvl';
		return $this->status;
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
		$timeSets = $this->countTimeSets(30);
		$starvation = $this->starvation;

		$famine = $timeSets*$starvation;

		return $famine;
	}

	public function setStarvation($starvation)
	{
		$this->starvation = $starvation;
	}
}