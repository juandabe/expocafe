<div class="pqrs form">
<?php echo $this->Form->create('Pqr'); ?>
	<fieldset>
		<legend><?php echo __('Registrar una PQR'); ?></legend>
	<?php
		echo $this->Form->input('type',array('type'=>'select','label' =>'Tipo','options'=>$types));
		echo $this->Form->input('name',array('label' => 'Nombre'));
		echo $this->Form->input('description',array('label' => 'Descripción'));
		echo $this->Form->input('body',array('label' => 'Cuerpo'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Mis PQRs '), array('action' => 'mypqrs')); ?></li>
                <li><?php echo $this->Html->link(__('Atras'), array('action' => 'mypqrs')); ?></li>
	</ul>
</div>
