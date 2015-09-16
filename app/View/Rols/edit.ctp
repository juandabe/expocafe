<div class="rols form">
<?php echo $this->Form->create('Rol'); ?>
	<fieldset>
		<legend><?php echo __('Modificar Rol'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('label' => 'Nombre'));
		echo $this->Form->input('description', array('label' => 'Descripción'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Rol.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Rol.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Atras'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
	</ul>
</div>
