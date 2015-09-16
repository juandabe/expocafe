<div class="clientdocuments index">
	<h2><?php echo __('Clientes con documentos diligenciados'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('client','Cliente'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clientdocuments as $clientdocument): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($clientdocument['User']['name'], array('controller' => 'users', 'action' => 'view', $clientdocument['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Documentos diligenciados'), array('action' => 'index', $clientdocument['User']['id'])); ?>
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
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listado Documentos'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Documento'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
