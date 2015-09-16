<div class="auditeventusers view">
<h2><?php echo __('Auditeventuser'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($auditeventuser['Auditeventuser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Auditevent'); ?></dt>
		<dd>
			<?php echo $this->Html->link($auditeventuser['Auditevent']['name'], array('controller' => 'auditevents', 'action' => 'view', $auditeventuser['Auditevent']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Event'); ?></dt>
		<dd>
			<?php echo h($auditeventuser['Auditeventuser']['date_event']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($auditeventuser['User']['name'], array('controller' => 'users', 'action' => 'view', $auditeventuser['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Auditeventuser'), array('action' => 'edit', $auditeventuser['Auditeventuser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Auditeventuser'), array('action' => 'delete', $auditeventuser['Auditeventuser']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $auditeventuser['Auditeventuser']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Auditeventusers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditeventuser'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Auditevents'), array('controller' => 'auditevents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditevent'), array('controller' => 'auditevents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
