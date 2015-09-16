<div class="clientdocuments form">
<?php echo $this->Form->create('Clientdocument',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Modificar documento'); ?></legend>
	<?php
		echo $this->Form->input('id_document',array('type'=>'select','label' =>'Documento','options'=>$documents));
		echo $this->Form->file('document_path_adjunt');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Borrar Documento'), array('action' => 'delete', $this->Form->value('Clientdocument.id')), array('confirm' => __('Esta seguro de eliminar el documento con id # %s?', $this->Form->value('Clientdocument.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Atras'), array('action' => 'myupdates')); ?></li>
	</ul>
</div>
