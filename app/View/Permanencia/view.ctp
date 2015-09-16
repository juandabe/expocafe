<div class="permanencia view">
<h2><?php echo __('Permanencium'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($permanencium['Permanencium']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lote'); ?></dt>
		<dd>
			<?php echo h($permanencium['Permanencium']['lote']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Razon Social'); ?></dt>
		<dd>
			<?php echo h($permanencium['Permanencium']['razon_social']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remesa'); ?></dt>
		<dd>
			<?php echo h($permanencium['Permanencium']['remesa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sacos'); ?></dt>
		<dd>
			<?php echo h($permanencium['Permanencium']['sacos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bodega'); ?></dt>
		<dd>
			<?php echo h($permanencium['Permanencium']['bodega']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($permanencium['Permanencium']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Plan'); ?></dt>
		<dd>
			<?php echo h($permanencium['Permanencium']['fecha_plan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dias En Bodega'); ?></dt>
		<dd>
			<?php echo h($permanencium['Permanencium']['dias_en_bodega']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Permanencium'), array('action' => 'edit', $permanencium['Permanencium']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Permanencium'), array('action' => 'delete', $permanencium['Permanencium']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $permanencium['Permanencium']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Permanencia'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permanencium'), array('action' => 'add')); ?> </li>
	</ul>
</div>
