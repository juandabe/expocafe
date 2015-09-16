<div class="bills form">
<?php echo $this->Form->create('Bill'); ?>
	<fieldset>
		<legend><?php echo __('Add Bill'); ?></legend>
	<?php
		echo $this->Form->input('total_bill');
		echo $this->Form->input('client');
		echo $this->Form->input('date_registration');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bills'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Billdetailitems'), array('controller' => 'billdetailitems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billdetailitem'), array('controller' => 'billdetailitems', 'action' => 'add')); ?> </li>
	</ul>
</div>
