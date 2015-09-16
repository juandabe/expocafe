<div class="users view">
<h2><?php echo __('Detalles de Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Nit'); ?></dt>
		<dd>
			<?php echo h($user['User']['nit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Modificar'), array('controller' => 'users', 'action' => 'editperuser', $user['User']['id'])); ?> </li>
                <li><?php echo $this->Html->link(__('Menú Principal'), array('controller' => 'pages', 'action' => 'home')); ?> </li>
	</ul>
</div>