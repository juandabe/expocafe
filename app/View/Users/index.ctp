<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nit'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('date_access'); ?></th>
			<th><?php echo $this->Paginator->sort('id_rol'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('ip_remote_server'); ?></th>
			<th><?php echo $this->Paginator->sort('id_exportador'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['nit']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['date_access']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Rol']['name'], array('controller' => 'rols', 'action' => 'view', $user['Rol']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['ip_remote_server']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['id_exportador']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pqrs'), array('controller' => 'pqrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pqr'), array('controller' => 'pqrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientdocuments'), array('controller' => 'clientdocuments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clientdocument'), array('controller' => 'clientdocuments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bills'), array('controller' => 'bills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bill'), array('controller' => 'bills', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Auditeventusers'), array('controller' => 'auditeventusers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditeventuser'), array('controller' => 'auditeventusers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Permanencia'), array('controller' => 'permanencia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permanencium'), array('controller' => 'permanencia', 'action' => 'add')); ?> </li>
	</ul>
</div>
