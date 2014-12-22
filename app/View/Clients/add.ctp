<div class="clients form">
<?php echo $this->Form->create('Client'); ?>
	<fieldset>
		<legend><?php echo __('Add Client'); ?></legend>
	<?php
		echo $this->Form->input('nom');
		echo $this->Form->input('prenom');
		echo $this->Form->input('adress');
		echo $this->Form->input('detail');
		echo $this->Form->input('policies_id');
		echo $this->Form->input('Policy');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Policies'), array('controller' => 'policies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Policy'), array('controller' => 'policies', 'action' => 'add')); ?> </li>
	</ul>
</div>
