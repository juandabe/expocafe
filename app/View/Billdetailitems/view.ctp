<div class="billdetailitems view">
<h2><?php echo __('Billdetailitem'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($billdetailitem['Billdetailitem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bill'); ?></dt>
		<dd>
			<?php echo $this->Html->link($billdetailitem['Bill']['id'], array('controller' => 'bills', 'action' => 'view', $billdetailitem['Bill']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($billdetailitem['Item']['id'], array('controller' => 'items', 'action' => 'view', $billdetailitem['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Registration'); ?></dt>
		<dd>
			<?php echo h($billdetailitem['Billdetailitem']['date_registration']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Billdetailitem'), array('action' => 'edit', $billdetailitem['Billdetailitem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Billdetailitem'), array('action' => 'delete', $billdetailitem['Billdetailitem']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $billdetailitem['Billdetailitem']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Billdetailitems'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billdetailitem'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bills'), array('controller' => 'bills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bill'), array('controller' => 'bills', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
