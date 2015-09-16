<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Editando Usuario'); ?></legend>
	<?php
		echo $this->Form->input('nit');
		echo $this->Form->input('password');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Atras'), array('controller' => 'users', 'action' => 'viewperuser', $user['User']['id'])); ?></li>
        </ul>
</div>
