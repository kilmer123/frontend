<div class="periodos view">
<h2><?php echo __('Periodo'); ?></h2>
	<table class= "table table-striped">
		<tr>
		<th><?php echo __('Id'); ?></th>
		<th>
			<?php echo h($periodo['Periodo']['id']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Fecha'); ?></th>
		<th>
			<?php echo h($periodo['Periodo']['fecha']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Carrera'); ?></th>
		<th>
			<?php echo $this->Html->link($periodo['Carrera']['carrera'], array('controller' => 'carreras', 'action' => 'view', $periodo['Carrera']['id'])); ?>
			&nbsp;
		</th>
	</tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Periodo'), array('action' => 'edit', $periodo['Periodo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Periodo'), array('action' => 'delete', $periodo['Periodo']['id']), array('confirm' => __('Estas seguro que deseas elimiar este Periodo?', $periodo['Periodo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Periodos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Periodo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Inscripciones'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Inscripciones Relacionadas'); ?></h3>
	<?php if (!empty($periodo['Inscripcion'])): ?>
	<table class= "table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Materia Id'); ?></th>
		<th><?php echo __('Estudiante Id'); ?></th>
		<th><?php echo __('Periodo Id'); ?></th>
		<th><?php echo __('Nota'); ?></th>
		<th><?php echo __('Seccion'); ?></th>
		<th><?php echo __('Aula Id'); ?></th>
		<th><?php echo __('Creado'); ?></th>
		<th><?php echo __('Modificado'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($periodo['Inscripcion'] as $inscripcion): ?>
		<tr>
			<td><?php echo $inscripcion['id']; ?></td>
			<td><?php echo $inscripcion['materia_id']; ?></td>
			<td><?php echo $inscripcion['estudiante_id']; ?></td>
			<td><?php echo $inscripcion['periodo_id']; ?></td>
			<td><?php echo $inscripcion['nota']; ?></td>
			<td><?php echo $inscripcion['seccion']; ?></td>
			<td><?php echo $inscripcion['aula_id']; ?></td>
			<td><?php echo $inscripcion['created']; ?></td>
			<td><?php echo $inscripcion['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'inscripcions', 'action' => 'view', $inscripcion['id']),array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'inscripcions', 'action' => 'edit', $inscripcion['id']),array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'inscripcions', 'action' => 'delete', $inscripcion['id']), array('class' => 'btn btn-sm btn-default'),array('confirm' => __('Estas seguro que deseas elimiar esta Inscripcion ?', $inscripcion['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nueva Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
