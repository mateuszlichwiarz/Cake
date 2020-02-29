<?php

namespace App\Test\TestCase\Utilities;

use App\Utilities\CalculateEating;
use Cake\TestSuite\TestCase;

class CalculateEatingTest extends TestCase
{
	public function testGetFirstDate(): void
	{
		$date = '2011-11-11';

		$calculate = new CalculateEating();
		$calculate->setFirstDate($date);

		$result = $calculate->getFirstDate();
		$this->assertEquals('2011-11-11', $result);
	}
}