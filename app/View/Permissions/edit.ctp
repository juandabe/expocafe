<div class="permissions form">
<?php echo $this->Form->create('Permission'); ?>
	<fieldset>
		<legend><?php echo __('Edit Permission'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('client');
		echo $this->Form->input('id_item');
		echo $this->Form->input('date_start');
		echo $this->Form->input('date_end');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Permission.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Permission.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Permissions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
