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

	public function newMan()
	{	
		$man = $this->Man->newEmptyEntity();
		if($this->request->is('post')) {
			$man = $this->Man->patchEntity($man, $this->request->getData());

		if($this->Man->save($man)) {
			return $this->redirect(['action' => 'index']);
		}
		$this->Flash->error(__('Unable to create your human.'));
		}
		$this->set('man', $man);
	}
}