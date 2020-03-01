<?php

// IMPORTANT
// only my ideas, not working
// ALL TO REFACTORING
namespace App\Utilities;

trait CalculateTime
{
	private $period; //period, please in seconds e.g minute == 60, hour == 3600 etc. 
	private $seconds;

	public abstract function setToDate(string $date): string;
	public abstract function setFromDate(string $date): string;

	public function setPeriod(int $period): int
	{
		$this->period = $period;
	}

	private function getTimeSets(): int
	{
		$seconds = $this->seconds;
		$period  = $this->period;

		return $timeSets = $;
	}

	public function countTimeSets(): int
	{
		$fromDate = $this->fromDate;
		$toDate   = $this->toDate;

		$seconds = round(strtotime($toDate)-strtotime($fromDate));

		$timeSets = $this->getTimeSets();

		return $timeSets;
	}
		//MAIN FUNCTIONALITY
		//po odpaleniu aplikacji dodawać wszystkie dni od ostatniego odpalenia i sumować akcje na nich n.p dodawanie oraz odejmowanie wartości z famine lub energy.
}