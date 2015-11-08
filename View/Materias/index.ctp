<div class="materias index">
	<h2><?php echo __('Materias'); ?></h2>
	<table class= "table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('materia'); ?></th>
			<th><?php echo $this->Paginator->sort('Semestre - Año'); ?></th>
			<th><?php echo $this->Paginator->sort('carrera_id'); ?></th>
			<th><?php echo $this->Paginator->sort('uc'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($materias as $materia): ?>
	<tr>
		<td><?php echo h($materia['Materia']['id']); ?>&nbsp;</td>
		<td><?php echo h($materia['Materia']['materia']); ?>&nbsp;</td>
		<td><?php echo h($materia['Materia']['semestreAno']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($materia['Carrera']['carrera'], array('controller' => 'carreras', 'action' => 'view', $materia['Carrera']['id'])); ?>
		</td>
		<td><?php echo h($materia['Materia']['uc']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $materia['Materia']['id']),array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $materia['Materia']['id']),array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $materia['Materia']['id']),array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Estas seguro que quieres eliminar esta Materia ?', $materia['Materia']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Pagina {:page} de {:pages}')
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
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nueva Materia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Inscripciones'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Requisitos'), array('controller' => 'requisitos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Requisito'), array('controller' => 'requisitos', 'action' => 'add')); ?> </li>
	</ul>
</div>
