<?php

namespace App\tests\TestCase\Human;

use App\Human\StarverClass;
use Cake\TestSuite\TestCase;

class StarverClassTest extends TestCase
{
	public function testAddFamine(): void
	{
		$starver = new StarverClass;
		$starver->setFamine(2);
		$starver->setStarvation(0.15);

		$result = $starver->addFamine();

		$property = 240*0.15;

		$this->assertEquals($property, $result);
	}
}