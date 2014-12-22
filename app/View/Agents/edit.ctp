<div class="agents form">
<?php echo $this->Form->create('Agent'); ?>
	<fieldset>
		<legend><?php echo __('Edit Agent'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('prenom');
		echo $this->Form->input('nom');
		echo $this->Form->input('datenaissance');
		echo $this->Form->input('email');
		echo $this->Form->input('detailmasque');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Agent.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Agent.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Agents'), array('action' => 'index')); ?></li>
	</ul>
</div>
