<div class="users index">
	<h2><?php echo __('DASHBOARD'); ?></h2>
	<table cellpadding="0" cellspacing="0">
            <h3> PQRs</h3>
	 <tr>
             
            <td>Contestadas</td>
            <td><?php echo $pqrscompletadas?></td>		
          </tr>
          <tr>
            <td>Total PQRs</td>
            <td><?php echo $totalcompletadas?></td>		
          </tr>
	</table>
	<p><p>
        <table cellpadding="0" cellspacing="0">
            <h3> Actualización Documentos</h3>
	 <tr>
             
            <td>Aceptados</td>
            <td><?php echo $documentosactualizados?></td>		
          </tr>
          <tr>
            <td>Total Diligenciados</td>
            <td><?php echo $totaldocumentos?></td>		
          </tr>
	</table>
        <p><p>

</div>
<div class="actions">
	<h3><?php echo __('Menú Principal'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Gestionar PQRs'), array('controller' => 'pqrs', 'action' => 'mypqrs')); ?> </li>
		<li><?php echo $this->Html->link(__('Actualizar Documentos'), array('controller' => 'clientdocuments', 'action' => 'myupdates')); ?> </li>
		<li><?php echo $this->Html->link(__('Facturas'), array('controller' => 'bills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Permanencia Café'), array('controller' => 'auditeventusers', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('Pesos Ingreso de Café'), array('controller' => 'users', 'action' => 'add'),array('confirm' => __('Esta consulta es FACTURABLE y sera cargada a usted mensualmente; ¿Desea continuar con la solicitud?')))?> </li>
                <li><?php echo $this->Html->link(__('Embalaje'), array('controller' => 'auditeventusers', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('Inventario Insumos'), array('controller' => 'auditeventusers', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('Configuración Usuario'), array('controller' => 'users', 'action' => 'viewperuser', $userauth['User']['id'])); ?></li>
	</ul>
</div>
