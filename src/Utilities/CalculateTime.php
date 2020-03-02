<?php

// IMPORTANT
// only my ideas, not working
// ALL TO REFACTORING
namespace App\Utilities;

trait CalculateTime
{
	private static $period; //period, please in seconds e.g minute == 60, hour == 3600 etc. 
	private static $seconds;

	public abstract function setToDate();
	public abstract function setFromDate(string $date);

	private function countTimeSets($period)
	{
		$fromDate = $this->fromDate;
		$toDate   = $this->toDate;

		$seconds = strtotime($toDate)-strtotime($fromDate);
		self::setSeconds($seconds);
		self::setPeriod($period);

		$timeSets = self::getTimeSets();

		return $timeSets;
	}

	private static function setPeriod(int $period)
	{
		self::$period = $period;
	}

	private static function setSeconds(int $seconds)
	{
		self::$seconds = $seconds;
	}

	private static function getTimeSets(): int
	{
		$seconds = self::$seconds;
		$period  = self::$period;

		if($seconds == 0 || $period == 0)
		{
			return 0;
		}

		return $seconds/$period;
	}
}