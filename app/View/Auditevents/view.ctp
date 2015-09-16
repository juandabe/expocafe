<div class="auditevents view">
<h2><?php echo __('Auditevent'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($auditevent['Auditevent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($auditevent['Auditevent']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($auditevent['Auditevent']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Auditevent'), array('action' => 'edit', $auditevent['Auditevent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Auditevent'), array('action' => 'delete', $auditevent['Auditevent']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $auditevent['Auditevent']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Auditevents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditevent'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Auditeventusers'), array('controller' => 'auditeventusers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditeventuser'), array('controller' => 'auditeventusers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Auditeventusers'); ?></h3>
	<?php if (!empty($auditevent['Auditeventuser'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Id Event'); ?></th>
		<th><?php echo __('Date Event'); ?></th>
		<th><?php echo __('User Event'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($auditevent['Auditeventuser'] as $auditeventuser): ?>
		<tr>
			<td><?php echo $auditeventuser['id']; ?></td>
			<td><?php echo $auditeventuser['id_event']; ?></td>
			<td><?php echo $auditeventuser['date_event']; ?></td>
			<td><?php echo $auditeventuser['user_event']; ?></td>
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
