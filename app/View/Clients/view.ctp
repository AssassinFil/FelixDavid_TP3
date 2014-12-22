<div class="clients view">
<h2><?php echo __('Client'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($client['Client']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prenom'); ?></dt>
		<dd>
			<?php echo h($client['Client']['prenom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adress'); ?></dt>
		<dd>
			<?php echo h($client['Client']['adress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detail'); ?></dt>
		<dd>
			<?php echo h($client['Client']['detail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Policies Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['policies_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client'), array('action' => 'edit', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Policies'), array('controller' => 'policies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Policy'), array('controller' => 'policies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Policies'); ?></h3>
	<?php if (!empty($client['Policy'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-bordered">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Clients Id'); ?></th>
		<th><?php echo __('Details'); ?></th>
		<th><?php echo __('Dateofpurchase'); ?></th>
		<th><?php echo __('Detailmasque'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($client['Policy'] as $policy): ?>
		<tr>
			<td><?php echo $policy['id']; ?></td>
			<td><?php echo $policy['clients_id']; ?></td>
			<td><?php echo $policy['details']; ?></td>
			<td><?php echo $policy['dateofpurchase']; ?></td>
			<td><?php echo $policy['detailmasque']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'policies', 'action' => 'view', $policy['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'policies', 'action' => 'edit', $policy['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'policies', 'action' => 'delete', $policy['id']), null, __('Are you sure you want to delete # %s?', $policy['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Policy'), array('controller' => 'policies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
