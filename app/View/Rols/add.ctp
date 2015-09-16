<div class="rols form">
<?php echo $this->Form->create('Rol'); ?>
	<fieldset>
		<legend><?php echo __('Nuevo Rol'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label' => 'Nombre'));
		echo $this->Form->input('description',array('label' => 'Descripción'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Nuevo')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Roles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Atras'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
	</ul>
</div>
