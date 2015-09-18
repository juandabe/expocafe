<div class="permissions view">
<h2><?php echo __('Permission'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($permission['Permission']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($permission['User']['name'], array('controller' => 'users', 'action' => 'view', $permission['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($permission['Item']['id'], array('controller' => 'items', 'action' => 'view', $permission['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Start'); ?></dt>
		<dd>
			<?php echo h($permission['Permission']['date_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date End'); ?></dt>
		<dd>
			<?php echo h($permission['Permission']['date_end']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Permission'), array('action' => 'edit', $permission['Permission']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Permission'), array('action' => 'delete', $permission['Permission']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $permission['Permission']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Permissions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permission'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
