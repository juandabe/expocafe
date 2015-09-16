<div class="billdetailitems form">
<?php echo $this->Form->create('Billdetailitem'); ?>
	<fieldset>
		<legend><?php echo __('Edit Billdetailitem'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('id_bill');
		echo $this->Form->input('id_item');
		echo $this->Form->input('date_registration');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Billdetailitem.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Billdetailitem.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Billdetailitems'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bills'), array('controller' => 'bills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bill'), array('controller' => 'bills', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
