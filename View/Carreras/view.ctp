<div class="carreras view">
<h2><?php echo __('Carrera'); ?></h2>
	<table class= "table table-striped">
		<tr>
		<th><?php echo __('Id'); ?></th>
		<th>
			<?php echo h($carrera['Carrera']['id']); ?>
			&nbsp;
		</th>
		</tr>
		<tr>
		<th><?php echo __('Carrera'); ?></th>
		<th>
			<?php echo h($carrera['Carrera']['carrera']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Area'); ?></th>
		<th>
			<?php echo $this->Html->link($carrera['Area']['area'], array('controller' => 'areas', 'action' => 'view', $carrera['Area']['id'])); ?>
			&nbsp;
		</dd>	
	</tr>
	<tr>
		<th><?php echo __('Created'); ?></th>
		<th>
			<?php echo h($carrera['Carrera']['created']); ?>
			&nbsp;
		</dd>
	</tr>
	<tr>
		<th><?php echo __('Modified'); ?></th>
		<th>
			<?php echo h($carrera['Carrera']['modified']); ?>
			&nbsp;
		</th>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Carrera'), array('action' => 'edit', $carrera['Carrera']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Carrera'), array('action' => 'delete', $carrera['Carrera']['id']), array('confirm' => __('Estas seguro que quieres eliminar esta Carrera?', $carrera['Carrera']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Carreras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Carrera'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Periodos'), array('controller' => 'periodos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Periodo'), array('controller' => 'periodos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Estudiantes Inscritos'); ?></h3>
	<?php if (!empty($carrera['Estudiante'])): ?>
	<table class= "table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Cedula'); ?></th>
		<th><?php echo __('Sexo'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Nacimiento'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Clave'); ?></th>
		<th><?php echo __('Carrera Id'); ?></th>
		<th><?php echo __('Ucc'); ?></th>
		<th><?php echo __('Uca'); ?></th>
		<th><?php echo __('Cohorte Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Promedio'); ?></th>
		<th><?php echo __('Tipo Id'); ?></th>
		<th><?php echo __('Creado'); ?></th>
		<th><?php echo __('Modificado'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($carrera['Estudiante'] as $estudiante): ?>
		<tr>
			<td><?php echo $estudiante['id']; ?></td>
			<td><?php echo $estudiante['nombre']; ?></td>
			<td><?php echo $estudiante['apellido']; ?></td>
			<td><?php echo $estudiante['cedula']; ?></td>
			<td><?php echo $estudiante['sexo']; ?></td>
			<td><?php echo $estudiante['telefono']; ?></td>
			<td><?php echo $estudiante['nacimiento']; ?></td>
			<td><?php echo $estudiante['email']; ?></td>
			<td><?php echo $estudiante['direccion']; ?></td>
			<td><?php echo $estudiante['clave']; ?></td>
			<td><?php echo $estudiante['carrera_id']; ?></td>
			<td><?php echo $estudiante['ucc']; ?></td>
			<td><?php echo $estudiante['uca']; ?></td>
			<td><?php echo $estudiante['cohorte_id']; ?></td>
			<td><?php echo $estudiante['estado_id']; ?></td>
			<td><?php echo $estudiante['promedio']; ?></td>
			<td><?php echo $estudiante['tipo_id']; ?></td>
			<td><?php echo $estudiante['created']; ?></td>
			<td><?php echo $estudiante['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'estudiantes', 'action' => 'view', $estudiante['id']),array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'estudiantes', 'action' => 'edit', $estudiante['id']),array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'estudiantes', 'action' => 'delete', $estudiante['id']),array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Estas seguro que quieres eliminar este Estudiante ?', $estudiante['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Estudiante'), array('controller' => 'estudiantes', 'action' => 'add'),array('class' => 'btn btn-sm btn-default')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Materias Relacionadas'); ?></h3>
	<?php if (!empty($carrera['Materia'])): ?>
	<table class= "table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Materia'); ?></th>
		<th><?php echo __('SemestreAno'); ?></th>
		<th><?php echo __('Carrera Id'); ?></th>
		<th><?php echo __('Uc'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($carrera['Materia'] as $materia): ?>
		<tr>
			<td><?php echo $materia['id']; ?></td>
			<td><?php echo $materia['materia']; ?></td>
			<td><?php echo $materia['semestreAno']; ?></td>
			<td><?php echo $materia['carrera_id']; ?></td>
			<td><?php echo $materia['uc']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'materias', 'action' => 'view', $materia['id']),array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'materias', 'action' => 'edit', $materia['id']),array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'materias', 'action' => 'delete', $materia['id']),array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Estas seguro que quieres eliminar esta Materia ?', $materia['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nueva Materia'), array('controller' => 'materias', 'action' => 'add'),array('class' => 'btn btn-sm btn-default')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Periodos Relacionados'); ?></h3>
	<?php if (!empty($carrera['Periodo'])): ?>
	<table class= "table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Carrera Id'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($carrera['Periodo'] as $periodo): ?>
		<tr>
			<td><?php echo $periodo['id']; ?></td>
			<td><?php echo $periodo['fecha']; ?></td>
			<td><?php echo $periodo['carrera_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'periodos', 'action' => 'view', $periodo['id']),array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'periodos', 'action' => 'edit', $periodo['id']),array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'periodos', 'action' => 'delete', $periodo['id']),array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Estas seguro que quieres eliminar este Periodo ?', $periodo['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Periodo'), array('controller' => 'periodos', 'action' => 'add'),array('class' => 'btn btn-sm btn-default')); ?> </li>
		</ul>
	</div>
</div>
