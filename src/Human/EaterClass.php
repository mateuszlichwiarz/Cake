<?php

// IMPORTANT
// only my ideas, not working
// ALL TO REFACTORING
namespace App\Human;

use App\Human\AbstractHuman;

class EaterClass extends AbstractHuman
{
	private $id;

	public function feed()
	{
		$famine = $this->getFamine();
		 $famine-= 25;

		if($famine <= 0){
			return $famine = 0;
		}else{
			return $famine;
		}
	}

	public function getStatus()
	{
		$name = $this->name;
		$famine = $this->famine;

		return $name.' - '.$famine.' famine lvl';	
	}
}