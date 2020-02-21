<?php

namespace App\Human;

class EaterClass
{
	private $id;
	private $name;
	private $famine;
	private $energy;

	public function feed()
	{
		$famine -= 25;

		if($famine >= 0){
			return $famine = 0;
		}else{
			return $famine;
		}
	}
}