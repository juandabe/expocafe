<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Modificar Item'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('description', array('label' => 'Descripción'));
		echo $this->Form->input('price', array('label' => 'Precio'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Item.id')), array('confirm' => __('Esta seguro de eliminar el item con id # %s?', $this->Form->value('Item.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Atras'), array('action' => 'index')); ?></li>
	</ul>
</div>
