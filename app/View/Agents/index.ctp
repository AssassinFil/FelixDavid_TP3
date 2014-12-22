<div class="agents index">
	<h2><?php echo __('Agents'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-bordered">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('prenom'); ?></th>
			<th><?php echo $this->Paginator->sort('nom'); ?></th>
			<th><?php echo $this->Paginator->sort('datenaissance'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('detailmasque'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($agents as $agent): ?>
	<tr>
		<td><?php echo h($agent['Agent']['id']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['prenom']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['nom']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['datenaissance']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['email']); ?>&nbsp;</td>
		<td><?php echo h($agent['Agent']['detailmasque']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $agent['Agent']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $agent['Agent']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $agent['Agent']['id']), null, __('Are you sure you want to delete # %s?', $agent['Agent']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Agent'), array('action' => 'add')); ?></li>
	</ul>
</div>
