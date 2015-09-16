<div class="documents form">
<?php echo $this->Form->create('document',array('type' => 'file'));?>
	<fieldset>
		<legend><?php echo __('Agregar Documento'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Nombre'));
                echo $this->Form->file('document_path_adjunt');
		echo $this->Form->input('active', array('type'=>'checkbox', 'label'=>'Activo', 'checked'=>'checked'));
		echo $this->Form->input('date', array('type'=>'date','label' => 'Fecha creación'));
		echo $this->Form->select(
                    'type',
                    ['RUT', 'CDC', 'R.I'],
                    ['empty' => '(Tipo de documento...)']
                );
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listado Documentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Atras'), array('controller' => 'Documents', 'action' => 'index')); ?> </li>
	</ul>
</div>
