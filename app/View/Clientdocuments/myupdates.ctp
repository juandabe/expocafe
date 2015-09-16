<div class="clientdocuments index">
	<h2><?php echo __('Mis documentos actualizados'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('id_document','Formato'); ?></th>
			<th><?php echo $this->Paginator->sort('document_path_adjunt','Documento adjuntos'); ?></th>
			<th><?php echo $this->Paginator->sort('date', 'Fecha'); ?></th>
                        <th><?php echo $this->Paginator->sort('state', 'Estado'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clientdocuments as $clientdocument): ?>
	<tr>
		<td><?php echo h($clientdocument['Clientdocument']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clientdocument['Document']['name'], array('controller' => 'documents', 'action' => 'view', $clientdocument['Document']['id'])); ?>
		</td>
		<td><?php echo $this->Html->link('Link', array(
                            'controller' => 'clientdocuments',
                            'action' => 'download',
                            $clientdocument['Clientdocument']['id'],
                            'full_base' => true
                        ));?></td>
		<td><?php echo h($clientdocument['Clientdocument']['date']); ?>&nbsp;</td>
                <td><?php echo h($clientdocument['Statedocument']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'viewdocument', $clientdocument['Clientdocument']['id'])); ?>
                    <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $clientdocument['Clientdocument']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $clientdocument['Clientdocument']['id']), array('confirm' => __('Esta seguro de eliminar el documento # %s?', $clientdocument['Clientdocument']['id']))); ?>
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
		echo $this->Paginator->prev('< ' . __('antes'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Actualizar Documentos'), array('controller' => 'clientdocuments', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar documentos activos'), array('controller' => 'documents', 'action' => 'actives')); ?> </li>
                <li><?php echo $this->Html->link(__('Menú Principal'), array('controller' => 'pages', 'action' => 'home')); ?></li>
	</ul>
</div>
