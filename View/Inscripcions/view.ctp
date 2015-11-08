<div class="inscripcions view">
<h2><?php echo __('Inscripcion'); ?></h2>
	<table class= "table table-striped">
		<tr>
		<th><?php echo __('Id'); ?></th>
		<th>
			<?php echo h($inscripcion['Inscripcion']['id']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Materia'); ?></th>
		<th>
			<?php echo $this->Html->link($inscripcion['Materia']['materia'], array('controller' => 'materias', 'action' => 'view', $inscripcion['Materia']['id'])); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Estudiante'); ?></th>
		<th>
			<?php echo $this->Html->link($inscripcion['Estudiante']['cedula']." ".$inscripcion['Estudiante']['nombre']." ".$inscripcion['Estudiante']['apellido'], array('controller' => 'estudiantes', 'action' => 'view', $inscripcion['Estudiante']['id'])); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Periodo'); ?></th>
		<th>
			<?php echo $this->Html->link($inscripcion['Periodo']['fecha'], array('controller' => 'periodos', 'action' => 'view', $inscripcion['Periodo']['id'])); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Nota'); ?></th>
		<th>
			<?php echo h($inscripcion['Inscripcion']['nota']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Seccion'); ?></th>
		<th>
			<?php echo h($inscripcion['Inscripcion']['seccion']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Aula'); ?></th>
		<th>
			<?php echo $this->Html->link($inscripcion['Aula']['aula'], array('controller' => 'aulas', 'action' => 'view', $inscripcion['Aula']['id'])); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Created'); ?></th>
		<th>
			<?php echo h($inscripcion['Inscripcion']['created']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Modified'); ?></th>
		<th>
			<?php echo h($inscripcion['Inscripcion']['modified']); ?>
			&nbsp;
		</th>
	</tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inscripcion'), array('action' => 'edit', $inscripcion['Inscripcion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Inscripcion'), array('action' => 'delete', $inscripcion['Inscripcion']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $inscripcion['Inscripcion']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripcions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Horarios'); ?></h3>
	<?php if (!empty($inscripcion['Horario'])): ?>
	<table class= "table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Inscripcion Id'); ?></th>
		<th><?php echo __('Dia Id'); ?></th>
		<th><?php echo __('Hora Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($inscripcion['Horario'] as $horario): ?>
		<tr>
			<td><?php echo $horario['id']; ?></td>
			<td><?php echo $horario['inscripcion_id']; ?></td>
			<td><?php echo $horario['dia_id']; ?></td>
			<td><?php echo $horario['hora_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'horarios', 'action' => 'view', $horario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'horarios', 'action' => 'edit', $horario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'horarios', 'action' => 'delete', $horario['id']), array('confirm' => __('Are you sure you want to delete # %s?', $horario['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
