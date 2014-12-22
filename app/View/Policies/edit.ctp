<div class="policies form">
<?php echo $this->Form->create('Policy'); ?>
	<fieldset>
		<legend><?php echo __('Edit Policy'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('clients_id');
		echo $this->Form->input('details');
		echo $this->Form->input('dateofpurchase');
		echo $this->Form->input('detailmasque');
		echo $this->Form->input('Client');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Policy.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Policy.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Policies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Agents'), array('controller' => 'agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agents'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clients'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
