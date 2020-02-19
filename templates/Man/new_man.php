<h1>New human</h1>

<?php

	echo $this->Form->create($man);
	echo $this->Form->control('name');
	echo $this->Form->control('weight');
	echo $this->Form->control('energy');
	echo $this->Form->control('famine');
	echo $this->Form->button(__('Save'));
	echo $this->Form->end();