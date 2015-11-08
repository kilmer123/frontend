<div class="aulas index">
	<h2><?php echo __('Aulas'); ?></h2>
	<table class= "table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('aula'); ?></th>
			<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($aulas as $aula): ?>
	<tr>
		<td><?php echo h($aula['Aula']['id']); ?>&nbsp;</td>
		<td><?php echo h($aula['Aula']['aula']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $aula['Aula']['id']),array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $aula['Aula']['id']),array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $aula['Aula']['id']),array('class' => 'btn btn-sm btn-default'),array('confirm' => __('Estas seguro que quieres Eliminar el Aula ?', $aula['Aula']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Pagina {:page} of {:pages}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nueva Aula'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Inscripciones'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
	</ul>
</div>
