<?php

namespace App\tests\TestCase\Human;

use App\Human\EaterClass;
use Cake\TestSuite\TestCase;

class EaterClassTest extends TestCase
{
	public function testFeed(): void
	{
		$eater = new EaterClass;
		$eater->setName('Mateusz');
		$eater->setFamine('27');

		$result = $eater->feed();

		$this->assertEquals('2', $result);
	}
}