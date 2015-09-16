<div class="clientdocuments view">
<h2><?php echo __('Detalles documento con id '.$clientdocument['Clientdocument']['id']); ?></h2>
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
</div>

<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Atras'), array('action' => 'myupdates')); ?> </li>
	</ul>
</div>
