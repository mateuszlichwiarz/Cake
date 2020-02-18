<?php

namespace App\Controller;

class ManController extends AppController
{
	public function index()
	{
		$man = array();
		$man['name'] = 'Mateusz';
		$man['weight'] = '80';
		$man['energy'] = '80';
		$man['famine'] = '5';

		$this->set(compact('man'));
	}
}