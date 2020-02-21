<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class ManController extends AppController
{
	public function index()
	{
		
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