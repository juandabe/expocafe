<div class="users index">
	<h2><?php echo __('DashBoard'); ?></h2>
	<table cellpadding="0" cellspacing="0">

	</table>
        <p><p>

</div>
<div class="actions">
	<h3><?php echo __('Menú Principal'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listado Maestro PQRs'), array('controller' => 'pqrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Documentación Clientes'), array('controller' => 'clientdocuments', 'action' => 'alldocuments')); ?> </li>
                <li><?php echo $this->Html->link(__('Auditoria Sistema'), array('controller' => 'auditeventusers', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('Gestión Usuarios'), array('controller' => 'users', 'action' => 'index')); ?></li>
	</ul>
</div>
