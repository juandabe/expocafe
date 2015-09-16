<div class="bills view">
<h2><?php echo __('Bill'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bill['Bill']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Bill'); ?></dt>
		<dd>
			<?php echo h($bill['Bill']['total_bill']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo h($bill['Bill']['client']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Registration'); ?></dt>
		<dd>
			<?php echo h($bill['Bill']['date_registration']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bill'), array('action' => 'edit', $bill['Bill']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bill'), array('action' => 'delete', $bill['Bill']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bill['Bill']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Bills'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bill'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Billdetailitems'), array('controller' => 'billdetailitems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billdetailitem'), array('controller' => 'billdetailitems', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Billdetailitems'); ?></h3>
	<?php if (!empty($bill['Billdetailitem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Id Bill'); ?></th>
		<th><?php echo __('Id Item'); ?></th>
		<th><?php echo __('Date Registration'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bill['Billdetailitem'] as $billdetailitem): ?>
		<tr>
			<td><?php echo $billdetailitem['id']; ?></td>
			<td><?php echo $billdetailitem['id_bill']; ?></td>
			<td><?php echo $billdetailitem['id_item']; ?></td>
			<td><?php echo $billdetailitem['date_registration']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'billdetailitems', 'action' => 'view', $billdetailitem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'billdetailitems', 'action' => 'edit', $billdetailitem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'billdetailitems', 'action' => 'delete', $billdetailitem['id']), array('confirm' => __('Are you sure you want to delete # %s?', $billdetailitem['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Billdetailitem'), array('controller' => 'billdetailitems', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
