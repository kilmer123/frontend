<div class="estudiantes view">
<h2><?php echo __('Estudiante'); ?></h2>
	<table class= "table table-striped">
	<thead>
		<tr>
		<th><?php echo __('Id'); ?></th>
		<th>
			<?php echo h($estudiante['Estudiante']['id']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Nombre'); ?></th>
		<th>
			<?php echo h($estudiante['Estudiante']['nombre']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Apellido'); ?></th>
		<th>
			<?php echo h($estudiante['Estudiante']['apellido']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Cedula'); ?></th>
		<th>
			<?php echo h($estudiante['Estudiante']['cedula']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Sexo'); ?></th>
		<th>
			<?php echo h($estudiante['Estudiante']['sexo']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Telefono'); ?></th>
		<th>
			<?php echo h($estudiante['Estudiante']['telefono']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Nacimiento'); ?></th>
		<th>
			<?php echo h($estudiante['Estudiante']['nacimiento']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Email'); ?></th>
		<th>
			<?php echo h($estudiante['Estudiante']['email']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Direccion'); ?></th>
		<th>
			<?php echo h($estudiante['Estudiante']['direccion']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Clave'); ?></th>
		<th>
			<?php echo h($estudiante['Estudiante']['clave']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Carrera'); ?></th>
		<th>
			<?php echo $this->Html->link($estudiante['Carrera']['carrera'], array('controller' => 'carreras', 'action' => 'view', $estudiante['Carrera']['id'])); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Ucc'); ?></th>
		<th>
			<?php echo h($estudiante['Estudiante']['ucc']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Uca'); ?></th>
		<th>
			<?php echo h($estudiante['Estudiante']['uca']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Cohorte'); ?></th>
		<th>
			<?php echo $this->Html->link($estudiante['Cohorte']['cohorte'], array('controller' => 'cohortes', 'action' => 'view', $estudiante['Cohorte']['id'])); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Estado'); ?></th>
		<th>
			<?php echo $this->Html->link($estudiante['Estado']['estado'], array('controller' => 'estados', 'action' => 'view', $estudiante['Estado']['id'])); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Promedio'); ?></th>
		<th>
			<?php echo h($estudiante['Estudiante']['promedio']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Tipo'); ?></th>
		<th>
			<?php echo $this->Html->link($estudiante['Tipo']['tipo'], array('controller' => 'tipos', 'action' => 'view', $estudiante['Tipo']['id'])); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Created'); ?></th>
		<th>
			<?php echo h($estudiante['Estudiante']['created']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Modified'); ?></th>
		<th>
			<?php echo h($estudiante['Estudiante']['modified']); ?>
			&nbsp;
		</th>

	</tr>
</div>
</table>
<br><br><br>

<!-- <div class="actions"> 
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estudiante'), array('action' => 'edit', $estudiante['Estudiante']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estudiante'), array('action' => 'delete', $estudiante['Estudiante']['id']), array(), __('Are you sure you want to delete # %s?', $estudiante['Estudiante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cohortes'), array('controller' => 'cohortes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cohorte'), array('controller' => 'cohortes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripcions'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
<div class="related">
	<h3><?php echo __('Related Inscripcions'); ?></h3>
	<?php if (!empty($estudiante['Inscripcion'])): ?>
	<table class= "table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Materia Id'); ?></th>
		<th><?php echo __('Estudiante Id'); ?></th>
		<th><?php echo __('Periodo Id'); ?></th>
		<th><?php echo __('Nota'); ?></th>
		<th><?php echo __('Seccion'); ?></th>
		<th><?php echo __('Aula Id'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($estudiante['Inscripcion'] as $inscripcion): ?>
		<tr>
			<td><?php echo $inscripcion['id']; ?></td>
			<td><?php echo $inscripcion['materia_id']; ?></td>
			<td><?php echo $inscripcion['estudiante_id']; ?></td>
			<td><?php echo $inscripcion['periodo_id']; ?></td>
			<td><?php echo $inscripcion['nota']; ?></td>
			<td><?php echo $inscripcion['seccion']; ?></td>
			<td><?php echo $inscripcion['aula_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'inscripcions', 'action' => 'view', $inscripcion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'inscripcions', 'action' => 'edit', $inscripcion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'inscripcions', 'action' => 'delete', $inscripcion['id']), array(), __('Are you sure you want to delete # %s?', $inscripcion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
