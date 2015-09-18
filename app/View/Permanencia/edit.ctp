<div class="permanencia form">
<?php echo $this->Form->create('Permanencium'); ?>
	<fieldset>
		<legend><?php echo __('Edit Permanencium'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('lote');
		echo $this->Form->input('id_exportador');
		echo $this->Form->input('razon_social');
		echo $this->Form->input('remesa');
		echo $this->Form->input('sacos');
		echo $this->Form->input('bodega');
		echo $this->Form->input('fecha');
		echo $this->Form->input('fecha_plan');
		echo $this->Form->input('dias_en_bodega');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Permanencium.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Permanencium.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Permanencia'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
