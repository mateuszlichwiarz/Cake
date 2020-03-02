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

	public function main()
	{
		$currentHour = date('H');
		$futureHour = $currentHour('H') + 1;

		if($currentHour == $futureHour){
			return $famine = $this->starvation();
		}
	}

	public function starvation()
	{
		return $famine += 25;
	}
}