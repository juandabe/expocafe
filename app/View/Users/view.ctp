<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nit'); ?></dt>
		<dd>
			<?php echo h($user['User']['nit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Access'); ?></dt>
		<dd>
			<?php echo h($user['User']['date_access']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rol'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Rol']['name'], array('controller' => 'rols', 'action' => 'view', $user['Rol']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip Remote Server'); ?></dt>
		<dd>
			<?php echo h($user['User']['ip_remote_server']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Exportador'); ?></dt>
		<dd>
			<?php echo h($user['User']['id_exportador']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Pqrs'); ?></h3>
	<?php if (!empty($user['Pqr'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Id Located'); ?></th>
		<th><?php echo __('Id Client'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Reply'); ?></th>
		<th><?php echo __('Date Create'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Pqr'] as $pqr): ?>
		<tr>
			<td><?php echo $pqr['id']; ?></td>
			<td><?php echo $pqr['type']; ?></td>
			<td><?php echo $pqr['name']; ?></td>
			<td><?php echo $pqr['id_located']; ?></td>
			<td><?php echo $pqr['id_client']; ?></td>
			<td><?php echo $pqr['description']; ?></td>
			<td><?php echo $pqr['body']; ?></td>
			<td><?php echo $pqr['state']; ?></td>
			<td><?php echo $pqr['reply']; ?></td>
			<td><?php echo $pqr['date_create']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pqrs', 'action' => 'view', $pqr['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pqrs', 'action' => 'edit', $pqr['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pqrs', 'action' => 'delete', $pqr['id']), array('confirm' => __('Are you sure you want to delete # %s?', $pqr['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pqr'), array('controller' => 'pqrs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Clientdocuments'); ?></h3>
	<?php if (!empty($user['Clientdocument'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Id Document'); ?></th>
		<th><?php echo __('Document Path Adjunt'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Client'); ?></th>
		<th><?php echo __('Observation'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Clientdocument'] as $clientdocument): ?>
		<tr>
			<td><?php echo $clientdocument['id']; ?></td>
			<td><?php echo $clientdocument['id_document']; ?></td>
			<td><?php echo $clientdocument['document_path_adjunt']; ?></td>
			<td><?php echo $clientdocument['state']; ?></td>
			<td><?php echo $clientdocument['date']; ?></td>
			<td><?php echo $clientdocument['client']; ?></td>
			<td><?php echo $clientdocument['observation']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clientdocuments', 'action' => 'view', $clientdocument['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clientdocuments', 'action' => 'edit', $clientdocument['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clientdocuments', 'action' => 'delete', $clientdocument['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clientdocument['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Clientdocument'), array('controller' => 'clientdocuments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Bills'); ?></h3>
	<?php if (!empty($user['Bill'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Total Bill'); ?></th>
		<th><?php echo __('Client'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Bill'] as $bill): ?>
		<tr>
			<td><?php echo $bill['id']; ?></td>
			<td><?php echo $bill['total_bill']; ?></td>
			<td><?php echo $bill['client']; ?></td>
			<td><?php echo $bill['date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bills', 'action' => 'view', $bill['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bills', 'action' => 'edit', $bill['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bills', 'action' => 'delete', $bill['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bill['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bill'), array('controller' => 'bills', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Auditeventusers'); ?></h3>
	<?php if (!empty($user['Auditeventuser'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Id Event'); ?></th>
		<th><?php echo __('User Event'); ?></th>
		<th><?php echo __('Date Event'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Auditeventuser'] as $auditeventuser): ?>
		<tr>
			<td><?php echo $auditeventuser['id']; ?></td>
			<td><?php echo $auditeventuser['id_event']; ?></td>
			<td><?php echo $auditeventuser['user_event']; ?></td>
			<td><?php echo $auditeventuser['date_event']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'auditeventusers', 'action' => 'view', $auditeventuser['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'auditeventusers', 'action' => 'edit', $auditeventuser['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'auditeventusers', 'action' => 'delete', $auditeventuser['id']), array('confirm' => __('Are you sure you want to delete # %s?', $auditeventuser['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Auditeventuser'), array('controller' => 'auditeventusers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Permanencia'); ?></h3>
	<?php if (!empty($user['Permanencium'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Lote'); ?></th>
		<th><?php echo __('Id Exportador'); ?></th>
		<th><?php echo __('Razon Social'); ?></th>
		<th><?php echo __('Remesa'); ?></th>
		<th><?php echo __('Sacos'); ?></th>
		<th><?php echo __('Bodega'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Fecha Plan'); ?></th>
		<th><?php echo __('Dias En Bodega'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Permanencium'] as $permanencium): ?>
		<tr>
			<td><?php echo $permanencium['id']; ?></td>
			<td><?php echo $permanencium['lote']; ?></td>
			<td><?php echo $permanencium['id_exportador']; ?></td>
			<td><?php echo $permanencium['razon_social']; ?></td>
			<td><?php echo $permanencium['remesa']; ?></td>
			<td><?php echo $permanencium['sacos']; ?></td>
			<td><?php echo $permanencium['bodega']; ?></td>
			<td><?php echo $permanencium['fecha']; ?></td>
			<td><?php echo $permanencium['fecha_plan']; ?></td>
			<td><?php echo $permanencium['dias_en_bodega']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'permanencia', 'action' => 'view', $permanencium['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'permanencia', 'action' => 'edit', $permanencium['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'permanencia', 'action' => 'delete', $permanencium['id']), array('confirm' => __('Are you sure you want to delete # %s?', $permanencium['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Permanencium'), array('controller' => 'permanencia', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
