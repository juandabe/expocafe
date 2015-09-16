<div class="documents index">
	<h2><?php echo __('Listado de documentos activos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name', 'Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('document_path_adjunt', 'Documento a diligenciar'); ?></th>
			<th><?php echo $this->Paginator->sort('date', 'Fecha publicación'); ?></th>
			<th><?php echo $this->Paginator->sort('type', 'Tipo'); ?></th>
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
		<td><?php echo h($document['Document']['date']); ?>&nbsp;</td>
		<td><?php echo h($document['Document']['type']); ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link(__('Actualizar Documentos'), array('controller' => 'clientdocuments', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('Atras'), array('controller' => 'Clientdocuments', 'action' => 'myupdates')); ?></li>
	</ul>
</div>
