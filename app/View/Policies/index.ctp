<div class="policies index">
	<h2><?php echo __('Policies'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-bordered">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('clients_id'); ?></th>
			<th><?php echo $this->Paginator->sort('details'); ?></th>
			<th><?php echo $this->Paginator->sort('dateofpurchase'); ?></th>
			<th><?php echo $this->Paginator->sort('detailmasque'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($policies as $policy): ?>
	<tr>
		<td><?php echo h($policy['Policy']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($policy['Clients']['id'], array('controller' => 'clients', 'action' => 'view', $policy['Clients']['id'])); ?>
		</td>
		<td><?php echo h($policy['Policy']['details']); ?>&nbsp;</td>
		<td><?php echo h($policy['Policy']['dateofpurchase']); ?>&nbsp;</td>
		<td><?php echo h($policy['Policy']['detailmasque']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $policy['Policy']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $policy['Policy']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $policy['Policy']['id']), null, __('Are you sure you want to delete # %s?', $policy['Policy']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Policy'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Agents'), array('controller' => 'agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agents'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clients'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
