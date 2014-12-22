<div class="policies view">
<h2><?php echo __('Policy'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($policy['Policy']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clients'); ?></dt>
		<dd>
			<?php echo $this->Html->link($policy['Clients']['id'], array('controller' => 'clients', 'action' => 'view', $policy['Clients']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($policy['Policy']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dateofpurchase'); ?></dt>
		<dd>
			<?php echo h($policy['Policy']['dateofpurchase']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detailmasque'); ?></dt>
		<dd>
			<?php echo h($policy['Policy']['detailmasque']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Policy'), array('action' => 'edit', $policy['Policy']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Policy'), array('action' => 'delete', $policy['Policy']['id']), null, __('Are you sure you want to delete # %s?', $policy['Policy']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Policies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Policy'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agents'), array('controller' => 'agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agents'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clients'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clients'); ?></h3>
	<?php if (!empty($policy['Client'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-bordered">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nom'); ?></th>
		<th><?php echo __('Prenom'); ?></th>
		<th><?php echo __('Adress'); ?></th>
		<th><?php echo __('Detail'); ?></th>
		<th><?php echo __('Policies Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($policy['Client'] as $client): ?>
		<tr>
			<td><?php echo $client['id']; ?></td>
			<td><?php echo $client['nom']; ?></td>
			<td><?php echo $client['prenom']; ?></td>
			<td><?php echo $client['adress']; ?></td>
			<td><?php echo $client['detail']; ?></td>
			<td><?php echo $client['policies_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clients', 'action' => 'view', $client['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clients', 'action' => 'edit', $client['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clients', 'action' => 'delete', $client['id']), null, __('Are you sure you want to delete # %s?', $client['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
