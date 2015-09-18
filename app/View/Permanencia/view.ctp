<div class="permanencia view">
<h2><?php echo __('Permanencium'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($permanencium['Permanencium']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lote'); ?></dt>
		<dd>
			<?php echo h($permanencium['Permanencium']['lote']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Exportador'); ?></dt>
		<dd>
			<?php echo h($permanencium['Permanencium']['id_exportador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Razon Social'); ?></dt>
		<dd>
			<?php echo h($permanencium['Permanencium']['razon_social']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remesa'); ?></dt>
		<dd>
			<?php echo h($permanencium['Permanencium']['remesa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sacos'); ?></dt>
		<dd>
			<?php echo h($permanencium['Permanencium']['sacos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bodega'); ?></dt>
		<dd>
			<?php echo h($permanencium['Permanencium']['bodega']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($permanencium['Permanencium']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Plan'); ?></dt>
		<dd>
			<?php echo h($permanencium['Permanencium']['fecha_plan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dias En Bodega'); ?></dt>
		<dd>
			<?php echo h($permanencium['Permanencium']['dias_en_bodega']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Permanencium'), array('action' => 'edit', $permanencium['Permanencium']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Permanencium'), array('action' => 'delete', $permanencium['Permanencium']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $permanencium['Permanencium']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Permanencia'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permanencium'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($permanencium['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nit'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Date Access'); ?></th>
		<th><?php echo __('Id Rol'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Ip Remote Server'); ?></th>
		<th><?php echo __('Id Exportador'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($permanencium['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['nit']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['date_access']; ?></td>
			<td><?php echo $user['id_rol']; ?></td>
			<td><?php echo $user['name']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['ip_remote_server']; ?></td>
			<td><?php echo $user['id_exportador']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
