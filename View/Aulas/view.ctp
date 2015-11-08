<div class="aulas view">
<h2><?php echo __('Aula'); ?></h2>
	<table class= "table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th>
			<?php echo h($aula['Aula']['id']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Aula'); ?></th>
		<th>
			<?php echo h($aula['Aula']['aula']); ?>
			&nbsp;
		</th>
	</tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Aula'), array('action' => 'edit', $aula['Aula']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Aula'), array('action' => 'delete', $aula['Aula']['id']), array('confirm' => __('Estas Seguro que quieres eliminar el Aula?', $aula['Aula']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Aulas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Aula'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Inscripciones'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Inscripciones Relacionadas'); ?></h3>
	<?php if (!empty($aula['Inscripcion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
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
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($aula['Inscripcion'] as $inscripcion): ?>
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
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'inscripcions', 'action' => 'view', $inscripcion['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'inscripcions', 'action' => 'edit', $inscripcion['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'inscripcions', 'action' => 'delete', $inscripcion['id']), array('confirm' => __('Estas seguro que deseas eliminar esta Inscripcion?', $inscripcion['id']))); ?>
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
