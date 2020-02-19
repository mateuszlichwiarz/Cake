<div class='man'>
	<h2>Man</h2>
<?php foreach($man as $item): ?>
	<h4> <?= h($item->name) ?> </h4>
	<p>Weight: <?= h($item->weight) ?> </p>
	<p>Famine: <?= h($item->famine) ?> </p>
	<p>Energy: <?= h($item->energy) ?> </p>
	<br>
<?php endforeach; ?>
</div>
<p><?= $this->Html->link('Create', ['action' => 'newMan']) ?></p>