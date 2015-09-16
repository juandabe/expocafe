<div class="rols view">
<h2><?php echo __('Detalles del Rol'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rol['Rol']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($rol['Rol']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripción'); ?></dt>
		<dd>
			<?php echo h($rol['Rol']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Rol'), array('action' => 'edit', $rol['Rol']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Borrar Rol'), array('action' => 'delete', $rol['Rol']['id']), array('confirm' => __('Esta seguro de eliminar el Rol con id # %s?', $rol['Rol']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Atras'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
	</ul>
</div>