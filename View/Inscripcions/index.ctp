<div class="inscripcions index">
	<h2><?php echo __('Inscripcions'); ?></h2>
	<table class= "table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('materia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estudiante_id'); ?></th>
			<th><?php echo $this->Paginator->sort('periodo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nota'); ?></th>
			<th><?php echo $this->Paginator->sort('seccion'); ?></th>
			<th><?php echo $this->Paginator->sort('aula_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($inscripcions as $inscripcion): ?>
	<tr>
		<td><?php echo h($inscripcion['Inscripcion']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($inscripcion['Materia']['materia'], array('controller' => 'materias', 'action' => 'view', $inscripcion['Materia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($inscripcion['Estudiante']['cedula'] ." ".$inscripcion['Estudiante']['nombre'] ." ".$inscripcion['Estudiante']['apellido'], array('controller' => 'estudiantes', 'action' => 'view', $inscripcion['Estudiante']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($inscripcion['Periodo']['fecha'], array('controller' => 'periodos', 'action' => 'view', $inscripcion['Periodo']['id'])); ?>
		</td>
		<td><?php echo h($inscripcion['Inscripcion']['nota']); ?>&nbsp;</td>
		<td><?php echo h($inscripcion['Inscripcion']['seccion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($inscripcion['Aula']['aula'], array('controller' => 'aulas', 'action' => 'view', $inscripcion['Aula']['id'])); ?>
		</td>
		<td><?php echo h($inscripcion['Inscripcion']['created']); ?>&nbsp;</td>
		<td><?php echo h($inscripcion['Inscripcion']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $inscripcion['Inscripcion']['id']),array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $inscripcion['Inscripcion']['id']),array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $inscripcion['Inscripcion']['id']),array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Are you sure you want to delete # %s?', $inscripcion['Inscripcion']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Periodos'), array('controller' => 'periodos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Periodo'), array('controller' => 'periodos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aulas'), array('controller' => 'aulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aula'), array('controller' => 'aulas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
