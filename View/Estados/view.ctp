<div class="estados view">
<h2><?php echo __('Estado'); ?></h2>
	<table class= "table table-striped">
		<tr>
		<th><?php echo __('Id'); ?></th>
		<th>
			<?php echo h($estado['Estado']['id']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Estado'); ?></th>
		<th>
			<?php echo h($estado['Estado']['estado']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estado'), array('action' => 'edit', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estado'), array('action' => 'delete', $estado['Estado']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $estado['Estado']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Estudiantes'); ?></h3>
	<?php if (!empty($estado['Estudiante'])): ?>
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
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estado['Estudiante'] as $estudiante): ?>
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
				<?php echo $this->Html->link(__('View'), array('controller' => 'estudiantes', 'action' => 'view', $estudiante['id']),array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'estudiantes', 'action' => 'edit', $estudiante['id']),array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'estudiantes', 'action' => 'delete', $estudiante['id']),array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Are you sure you want to delete # %s?', $estudiante['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add'),array('class' => 'btn btn-sm btn-default')); ?> </li>
		</ul>
	</div>
</div>
