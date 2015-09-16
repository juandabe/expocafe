<div class="documents form">
<?php echo $this->Form->create('Document',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editando documento con id '.$this->Form->value('Document.id')); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->file('document_path_adjunt');
		echo $this->Form->input('active', array('type'=>'checkbox', 'label'=>'Activo', 'checked'=>'checked'));
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Document.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Document.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Documents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientdocuments'), array('controller' => 'clientdocuments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clientdocument'), array('controller' => 'clientdocuments', 'action' => 'add')); ?> </li>
	</ul>
</div>
