<div class="clientdocuments view">
<h2><?php echo __('Verificar documento con id '.$clientdocument['Clientdocument']['id']); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clientdocument['Clientdocument']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Documento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientdocument['Document']['name'], array('controller' => 'documents', 'action' => 'view', $clientdocument['Document']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adjunto'); ?></dt>
                <dt>
                    <dd>
                    <?php echo $this->Html->link('Link', array(
                            'controller' => 'clientdocuments',
                            'action' => 'download',
                            $clientdocument['Clientdocument']['id'],
                            'full_base' => true
                        ));?>
                    </dd>
                </dt>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($clientdocument['Clientdocument']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientdocument['User']['name'], array('controller' => 'users', 'action' => 'view', $clientdocument['User']['id'])); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Observación'); ?></dt>
		<dd>
			<?php echo h($clientdocument['Clientdocument']['observation']); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($clientdocument['Statedocument']['name']); ?>
			&nbsp;
		</dd>
	</dl>
        <?php echo $this->Form->create('Clientdocument'); ?>
	<fieldset>
	<?php
		echo $this->Form->select(
                    'Clientdocument.state',
                    ['1' => 'POR ACTUALIZAR', '2' => 'RECHAZADO', '3' => 'ACEPTADO'],
                    ['empty' => '(Cambiar estado a...)']);
		echo $this->Form->input('observation',array('label' => 'Cambiar Observación'));
	?>
	</fieldset>
        <?php echo $this->Form->end(__('Salvar')); ?>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Clientdocument'), array('action' => 'edit', $clientdocument['Clientdocument']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Clientdocument'), array('action' => 'delete', $clientdocument['Clientdocument']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clientdocument['Clientdocument']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientdocuments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clientdocument'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
