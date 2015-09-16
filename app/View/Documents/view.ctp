<div class="documents view">
<h2><?php echo __('Detalles del documento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($document['Document']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($document['Document']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Document Path Adjunt'); ?></dt>
		<dd>
			<?php echo h($document['Document']['document_path_adjunt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($document['Document']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($document['Document']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($document['Document']['type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Document'), array('action' => 'edit', $document['Document']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Document'), array('action' => 'delete', $document['Document']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $document['Document']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientdocuments'), array('controller' => 'clientdocuments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clientdocument'), array('controller' => 'clientdocuments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clientdocuments'); ?></h3>
	<?php if (!empty($document['Clientdocument'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Id Document'); ?></th>
		<th><?php echo __('Document Path Adjunt'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Client'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($document['Clientdocument'] as $clientdocument): ?>
		<tr>
			<td><?php echo $clientdocument['id']; ?></td>
			<td><?php echo $clientdocument['id_document']; ?></td>
			<td><?php echo $clientdocument['document_path_adjunt']; ?></td>
			<td><?php echo $clientdocument['date']; ?></td>
			<td><?php echo $clientdocument['client']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clientdocuments', 'action' => 'view', $clientdocument['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clientdocuments', 'action' => 'edit', $clientdocument['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clientdocuments', 'action' => 'delete', $clientdocument['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clientdocument['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Clientdocument'), array('controller' => 'clientdocuments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
