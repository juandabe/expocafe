<div class="clientdocuments index">
	<h2><?php echo __('Listado Documentos Diligenciados ') ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('id_document', 'Documento'); ?></th>
			<th><?php echo $this->Paginator->sort('date','Fecha registro'); ?></th>
                        <th><?php echo $this->Paginator->sort('state','Estado'); ?></th>
			<th><?php echo $this->Paginator->sort('client','Cliente'); ?></th>
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
		<td><?php echo h($clientdocument['Clientdocument']['date']); ?>&nbsp;</td>
                <td><?php echo h($clientdocument['Statedocument']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clientdocument['User']['name'], array('controller' => 'users', 'action' => 'view', $clientdocument['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Revisar'), array('action' => 'check', $clientdocument['Clientdocument']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $clientdocument['Clientdocument']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clientdocument['Clientdocument']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Clientes actualizados'), array('action' => 'alldocuments')); ?></li>
	</ul>
</div>
