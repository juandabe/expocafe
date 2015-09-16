<div class="items index">
	<h2><?php echo __('Listado Maestro Items'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('description','Descripción'); ?></th>
			<th><?php echo $this->Paginator->sort('price','Precio'); ?></th>
                        <th><?php echo $this->Paginator->sort('date','Fecha Creación'); ?></th>
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($items as $item): ?>
	<tr>
		<td><?php echo h($item['Item']['id']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['description']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['price']); ?>&nbsp;</td>
                <td><?php echo h($item['Item']['date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $item['Item']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $item['Item']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $item['Item']['id']), array('confirm' => __('Esta seguro de eliminar el item con id # %s?', $item['Item']['id']))); ?>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Item'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Menú Principal'), array('controller' => 'billdetailitems', 'action' => 'index')); ?> </li>
	</ul>
</div>
