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
		$this->loadComponent('Flash');
		
		$man = $this->Mans->newEmptyEntity();
		if($this->request->is('post')) {
			$man = $this->Mans->patchEntity($man, $this->request->getData());
			$man->name = 'John';
			$man->weight = '80';
			$man->energy = '100';
			$man->famine = '0';

		if($this->Mans->save($man)){
			$this->Flash->success(__('Man saved'));
			return $this->redirect(['action' => 'index']);
		}
		$this->Flash->error(__('Unable to create your human.'));
		}
		$this->set('man', $man);
	}
}