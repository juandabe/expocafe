<div class="auditeventusers form">
<?php echo $this->Form->create('Auditeventuser'); ?>
	<fieldset>
		<legend><?php echo __('Add Auditeventuser'); ?></legend>
	<?php
		echo $this->Form->input('id_event');
		echo $this->Form->input('date_event');
		echo $this->Form->input('user_event');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Auditeventusers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Auditevents'), array('controller' => 'auditevents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditevent'), array('controller' => 'auditevents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
