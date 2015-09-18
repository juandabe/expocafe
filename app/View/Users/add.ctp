<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('nit');
		echo $this->Form->input('password');
		echo $this->Form->input('date_access');
		echo $this->Form->input('id_rol');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('ip_remote_server');
		echo $this->Form->input('id_exportador');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pqrs'), array('controller' => 'pqrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pqr'), array('controller' => 'pqrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientdocuments'), array('controller' => 'clientdocuments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clientdocument'), array('controller' => 'clientdocuments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bills'), array('controller' => 'bills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bill'), array('controller' => 'bills', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Auditeventusers'), array('controller' => 'auditeventusers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditeventuser'), array('controller' => 'auditeventusers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Permanencia'), array('controller' => 'permanencia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permanencium'), array('controller' => 'permanencia', 'action' => 'add')); ?> </li>
	</ul>
</div>
