<div class="auditevents form">
<?php echo $this->Form->create('Auditevent'); ?>
	<fieldset>
		<legend><?php echo __('Add Auditevent'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Auditevents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Auditeventusers'), array('controller' => 'auditeventusers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditeventuser'), array('controller' => 'auditeventusers', 'action' => 'add')); ?> </li>
	</ul>
</div>
