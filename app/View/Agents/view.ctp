<div class="agents view">
<h2><?php echo __('Agent'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prenom'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['prenom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datenaissance'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['datenaissance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detailmasque'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['detailmasque']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Agent'), array('action' => 'edit', $agent['Agent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Agent'), array('action' => 'delete', $agent['Agent']['id']), null, __('Are you sure you want to delete # %s?', $agent['Agent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Agents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent'), array('action' => 'add')); ?> </li>
	</ul>
</div>
