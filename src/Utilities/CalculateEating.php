<?php

// IMPORTANT
// only my ideas, not working
// ALL TO REFACTORING
namespace App\Time;

trait CalculateEating
{
	//date of create human 
	private $firstDate;
	private $lastLoggedDate;
	private $currentDate;

	public function setFirstDate($firstDate)
	{
		$this->firstDate;
		return $this;
	}

	public function setLastLoggedDate($loggedDate)
	{
		$this->lastLoggedDate;
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