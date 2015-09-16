<div class="pqrs index">
	<h2><?php echo __('Listado de mis PQRs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('type', 'Tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('name', 'Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('id_located', 'Radicado'); ?></th>
			<th><?php echo $this->Paginator->sort('id_client', 'Exportador'); ?></th>
			<th><?php echo $this->Paginator->sort('state', 'Estado'); ?></th>
			<th><?php echo $this->Paginator->sort('date_create', 'Fecha creación'); ?></th>
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pqrs as $pqr): ?>
	<tr>
		<td><?php echo h($pqr['Pqr']['id']); ?>&nbsp;</td>
		<td><?php echo h($pqr['Typepqr']['name']); ?>&nbsp;</td>
		<td><?php echo h($pqr['Pqr']['name']); ?>&nbsp;</td>
		<td><?php echo h($pqr['Pqr']['id_located']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pqr['User']['name'], array('controller' => 'users', 'action' => 'view', $pqr['User']['id'])); ?>
		</td>
		<td><?php echo h($pqr['Statepqr']['name']); ?>&nbsp;</td>
		<td><?php echo h($pqr['Pqr']['date_create']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'viewmypqr', $pqr['Pqr']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $pqr['Pqr']['id']), array('confirm' => __('Esta seguro de eliminar la PQR con id # %s?', $pqr['Pqr']['id']))); ?>
		</td>
	</tr>
        <?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Pagina {:page} de {:pages}, mostrando {:current} de un registro total de {:count}, iniciando con {:start}, finalizando con el {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Antes'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nueva PQR'), array('action' => 'add')); ?></li>
                <li><?php echo $this->Html->link(__('Menú Principal'), array('controller' => 'pages', 'action' => 'home')); ?></li>
                
	</ul>
</div>
