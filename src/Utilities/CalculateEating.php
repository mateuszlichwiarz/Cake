<?php

// IMPORTANT
// only my ideas, not working
// ALL TO REFACTORING
namespace App\Utilities;

class CalculateEating
{
	//date of create human 
	private $firstDate;
	private $lastLoggedDate;
	private $currentDate;

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
		$lastLoggedDate = $this->createDate;

		$currentDate = $this->currentDate;

		$result = round((strtotime($tomorrow)-strtotime($today))/86400);

		return $result;
	}
		//MAIN FUNCTIONALITY
		//po odpaleniu aplikacji dodawać wszystkie dni od ostatniego odpalenia i sumować akcje na nich n.p dodawanie oraz odejmowanie wartości z famine lub energy.
}