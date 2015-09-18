<div class="permissions index">
	<h2><?php echo __('Permissions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('client'); ?></th>
			<th><?php echo $this->Paginator->sort('id_item'); ?></th>
			<th><?php echo $this->Paginator->sort('date_start'); ?></th>
			<th><?php echo $this->Paginator->sort('date_end'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($permissions as $permission): ?>
	<tr>
		<td><?php echo h($permission['Permission']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($permission['User']['name'], array('controller' => 'users', 'action' => 'view', $permission['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($permission['Item']['id'], array('controller' => 'items', 'action' => 'view', $permission['Item']['id'])); ?>
		</td>
		<td><?php echo h($permission['Permission']['date_start']); ?>&nbsp;</td>
		<td><?php echo h($permission['Permission']['date_end']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $permission['Permission']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $permission['Permission']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $permission['Permission']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $permission['Permission']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Permission'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
