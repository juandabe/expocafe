<div class="permanencia index">
	<h2><?php echo __('Permanencia'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('lote'); ?></th>
                        <th><?php echo $this->Paginator->sort('id_exportador'); ?></th>
			<th><?php echo $this->Paginator->sort('razon_social'); ?></th>
			<th><?php echo $this->Paginator->sort('remesa'); ?></th>
			<th><?php echo $this->Paginator->sort('sacos'); ?></th>
			<th><?php echo $this->Paginator->sort('bodega'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_plan'); ?></th>
			<th><?php echo $this->Paginator->sort('dias_en_bodega'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($permanencia as $permanencium): ?>
	<tr>
		<td><?php echo h($permanencium['Permanencium']['id']); ?>&nbsp;</td>
		<td><?php echo h($permanencium['Permanencium']['lote']); ?>&nbsp;</td>
                <td><?php echo h($permanencium['Permanencium']['id_exportador']); ?>&nbsp;</td>
		<td><?php echo h($permanencium['Permanencium']['razon_social']); ?>&nbsp;</td>
		<td><?php echo h($permanencium['Permanencium']['remesa']); ?>&nbsp;</td>
		<td><?php echo h($permanencium['Permanencium']['sacos']); ?>&nbsp;</td>
		<td><?php echo h($permanencium['Permanencium']['bodega']); ?>&nbsp;</td>
		<td><?php echo h($permanencium['Permanencium']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($permanencium['Permanencium']['fecha_plan']); ?>&nbsp;</td>
		<td><?php echo h($permanencium['Permanencium']['dias_en_bodega']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $permanencium['Permanencium']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $permanencium['Permanencium']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $permanencium['Permanencium']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $permanencium['Permanencium']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Permanencium'), array('action' => 'add')); ?></li>
	</ul>
</div>
