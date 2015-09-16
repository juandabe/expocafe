<div class="pqrs form">
<?php echo $this->Form->create('Pqr'); ?>
	<fieldset>
		<legend><?php echo __('Responder PQR con radicado '.$this->Form->value('Pqr.id_located')); ?></legend>
	<?php
		echo $this->Form->input('state',array('state'=>'select','label' =>'Estado','options'=>$states));
		echo $this->Form->input('reply', array('label' => 'Respuesta'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Pqr.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Pqr.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Pqrs'), array('action' => 'index')); ?></li>
	</ul>
</div>
