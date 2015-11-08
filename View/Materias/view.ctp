<div class="materias view">
<h2><?php echo __('Materia'); ?></h2>
	<table class= "table table-striped">
		<tr>
		<th><?php echo __('Id'); ?></th>
		<th>
			<?php echo h($materia['Materia']['id']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Materia'); ?></th>
		<th>
			<?php echo h($materia['Materia']['materia']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Semestre-Año'); ?></th>
		<th>
			<?php echo h($materia['Materia']['semestreAno']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Carrera'); ?></th>
		<th>
			<?php echo $this->Html->link($materia['Carrera']['carrera'], array('controller' => 'carreras', 'action' => 'view', $materia['Carrera']['id'])); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Uc'); ?></th>
		<th>
			<?php echo h($materia['Materia']['uc']); ?>
			&nbsp;
		</th>
	</tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Materia'), array('action' => 'edit', $materia['Materia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Materia'), array('action' => 'delete', $materia['Materia']['id']), array('confirm' => __('Estas seguro que quieres eliminar esta Materia ?', $materia['Materia']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Materias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Materia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Inscripciones'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Requisitos'), array('controller' => 'requisitos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Requisito'), array('controller' => 'requisitos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Inscripciones Relacionadas'); ?></h3>
	<?php if (!empty($materia['Inscripcion'])): ?>
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
	<?php foreach ($materia['Inscripcion'] as $inscripcion): ?>
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
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'inscripcions', 'action' => 'delete', $inscripcion['id']),array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Estas seguro que quieres eliminar esta Inscripcion ?', $inscripcion['id']))); ?>
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
<div class="related">
	<h3><?php echo __('Requisitos Relacionados'); ?></h3>
	<?php if (!empty($materia['Requisito'])): ?>
	<table class= "table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Materia Id'); ?></th>
		<th><?php echo __('Requisito Id'); ?></th>
		<th><?php echo __('Uc'); ?></th>
		<th><?php echo __('Cupo'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($materia['Requisito'] as $requisito): ?>
		<tr>
			<td><?php echo $requisito['id']; ?></td>
			<td><?php echo $requisito['materia_id']; ?></td>
			<td><?php echo $requisito['requisito_id']; ?></td>
			<td><?php echo $requisito['uc']; ?></td>
			<td><?php echo $requisito['cupo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'requisitos', 'action' => 'view', $requisito['id']),array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'requisitos', 'action' => 'edit', $requisito['id']),array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'requisitos', 'action' => 'delete', $requisito['id']),array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Estas seguro que quieres eliminar estos Requisitos ?', $requisito['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Requisito'), array('controller' => 'requisitos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
