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

		$result = $starver->addFamine();

		$this->assertEquals('240', $result);
	}
}