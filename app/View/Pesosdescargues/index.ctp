<div class="pesosdescargues index">
	<h2><?php echo __('Pesos de descargue de Café'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
                <th><?php echo $this->Paginator->sort('lote', 'Num Lote'); ?></th>
                <th><?php echo $this->Paginator->sort('kilos', 'Pesos Con Tara (KG)'); ?></th>
                <th><?php echo $this->Paginator->sort('kilos', 'Pesos Sin Tara (KG)'); ?></th>
                <th><?php echo $this->Paginator->sort('fecha', 'Fecha Descargue'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pesosdescargues as $pesosdescargue): ?>
	<tr>
		<td><?php echo h($pesosdescargue['Pesosdescargue']['lote']); ?>&nbsp;</td>
		<td><?php echo h($pesosdescargue['Pesosdescargue']['kilos']); ?>&nbsp;</td>
                <td><?php 
                    $tipoEmpaque=($pesosdescargue['Pesosdescargue']['tipo_empaque']/10);
                    $sacos=$pesosdescargue['Pesosdescargue']['sacos'];
                    $taraEmpaque=($tipoEmpaque*$sacos);
                    $tara=$taraEmpaque+$pesosdescargue['Pesosdescargue']['tara'];
                    $pesosBruto=$pesosdescargue['Pesosdescargue']['kilos'];
                    $pesosNeto=$pesosBruto-$tara;
                    echo $pesosNeto; 
                ?></td>
		<td><?php echo h($pesosdescargue['Pesosdescargue']['fecha']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Pagina {:page} de {:pages}, mostrando {:current} de un registro total de {:count}, iniciando con {:start}, finalizando con el {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Antes'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
                <li><?php
                echo $this->Html->link('Descargar XLS',array('controller'=>'Pesosdescargues','action'=>'download'), array('target'=>'_blank'));
                ?></li>
                <li><?php echo $this->Html->link(__('Descargar PDF'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Menú Principal'), array('controller' => 'pages', 'action' => 'main')); ?> </li>
	</ul>
        </div>
