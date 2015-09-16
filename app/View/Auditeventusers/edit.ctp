<div class="auditeventusers form">
<?php echo $this->Form->create('Auditeventuser'); ?>
	<fieldset>
		<legend><?php echo __('Edit Auditeventuser'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Auditeventuser.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Auditeventuser.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Auditeventusers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Auditevents'), array('controller' => 'auditevents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditevent'), array('controller' => 'auditevents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
