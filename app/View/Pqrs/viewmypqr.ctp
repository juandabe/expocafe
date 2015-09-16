<div class="pqrs view">
<h2><?php echo __('Detalles de la PQR con id '.$pqr['Pqr']['id']); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pqr['Pqr']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($pqr['Typepqr']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($pqr['Pqr']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('# Radicado'); ?></dt>
		<dd>
			<?php echo h($pqr['Pqr']['id_located']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exportador'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pqr['User']['name'], array('controller' => 'users', 'action' => 'view', $pqr['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripción'); ?></dt>
		<dd>
			<?php echo h($pqr['Pqr']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuerpo'); ?></dt>
		<dd>
			<?php echo h($pqr['Pqr']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($pqr['Statepqr']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Respuesta'); ?></dt>
		<dd>
			<?php echo h($pqr['Pqr']['reply']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha creación'); ?></dt>
		<dd>
			<?php echo h($pqr['Pqr']['date_create']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Borrar PQR'), array('action' => 'delete', $pqr['Pqr']['id']), array('confirm' => __('Esta seguro de eliminar la PQR con id # %s?', $pqr['Pqr']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Mis PQRs'), array('action' => 'mypqrs')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva PQR'), array('action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('Atras'), array('action' => 'mypqrs')); ?></li>
	</ul>
</div>
