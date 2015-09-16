<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Nuevo Usuario'); ?></legend>
	<?php
		echo $this->Form->input('nit');
		echo $this->Form->input('password');
		echo $this->Form->input('date_access');
		echo $this->Form->input('id_rol',array('type'=>'select','label' =>'Roles','options'=>$rols));
		echo $this->Form->input('name');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
        </ul>
</div>
