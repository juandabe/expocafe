<div class="clientdocuments form">
<?php echo $this->Form->create('Clientdocument',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Actualizar un documento'); ?></legend>
	<?php
		echo $this->Form->input('id_document',array('type'=>'select','label' =>'Documento','options'=>$documents));
		echo $this->Form->file('document_path_adjunt');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Documentos actualizados'), array('controller' => 'Clientdocuments', 'action' => 'myupdates')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Documentos activos'), array('controller' => 'documents', 'action' => 'actives')); ?> </li>
	</ul>
</div>
