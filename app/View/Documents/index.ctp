<div class="documents index">
	<h2><?php echo __('Listado Maestro de Documentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name', 'Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('document_path_adjunt', 'Enlace'); ?></th>
			<th><?php echo $this->Paginator->sort('active', 'Activo'); ?></th>
			<th><?php echo $this->Paginator->sort('date', 'Fecha publicación'); ?></th>
			<th><?php echo $this->Paginator->sort('type', 'Tipo'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($documents as $document): ?>
	<tr>
		<td><?php echo h($document['Document']['id']); ?>&nbsp;</td>
		<td><?php echo h($document['Document']['name']); ?>&nbsp;</td>
                <td><?php echo $this->Html->link('Link', array(
                            'controller' => 'documents',
                            'action' => 'download',
                            $document['Document']['id'],
                            'full_base' => true
                        ));?></td>
		<td><?php echo h($document['Document']['active']); ?>&nbsp;</td>
		<td><?php echo h($document['Document']['date']); ?>&nbsp;</td>
		<td><?php echo h($document['Document']['type']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $document['Document']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $document['Document']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $document['Document']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $document['Document']['id']))); ?>
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
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Documento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Documentos Exportadores'), array('controller' => 'clientdocuments', 'action' => 'alldocuments')); ?> </li>
                <li><?php echo $this->Html->link(__('Menú Principal'), array('controller' => 'pages', 'action' => 'main')); ?></li>
        </ul>
</div>
