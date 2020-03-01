<?php

// IMPORTANT
// only my ideas, not working
// ALL TO REFACTORING
namespace App\Utilities;

class CalculateEating
{
	private $period; //period, please in seconds e.g minute == 60, hour == 3600 etc. 
	private $seconds;

	public function getFirstDate()
	{
		return $this->firstDate;
	}

	public function setCurrentDate()
	{
		$date = date("Y-m-d");
		$this->currentDate = $date;
	}

	public function setFirstDate($date)
	{
		$this->firstDate = $date;
	}

	public function setLastLoggedDate($date)
	{
		$this->lastLoggedDate = $date;
	}

	public function countHours()
	{
		$lastLoggedDate = $this->lastLoggedDate;

		$currentDate = $this->currentDate;

		$result = round((strtotime($currentDate)-strtotime($lastLoggedDate))/86400);

		return $result;
	}
		//MAIN FUNCTIONALITY
		//po odpaleniu aplikacji dodawać wszystkie dni od ostatniego odpalenia i sumować akcje na nich n.p dodawanie oraz odejmowanie wartości z famine lub energy.
}