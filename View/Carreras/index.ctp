<div class="carreras index">
	<h2><?php echo __('Carreras'); ?></h2>
	<table class= "table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('carrera'); ?></th>
			<th><?php echo $this->Paginator->sort('area_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creatdo'); ?></th>
			<th><?php echo $this->Paginator->sort('modificado'); ?></th>
			<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($carreras as $carrera): ?>
	<tr>
		<td><?php echo h($carrera['Carrera']['id']); ?>&nbsp;</td>
		<td><?php echo h($carrera['Carrera']['carrera']); ?>&nbsp;</td>
		<td>
		<?php echo $this->Html->link($carrera['Area']['area'], array('controller' => 'areas', 'action' => 'view', $carrera['Area']['id'])); ?>
		</td>
		<td><?php echo h($carrera['Carrera']['created']); ?>&nbsp;</td>
		<td><?php echo h($carrera['Carrera']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $carrera['Carrera']['id']),array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $carrera['Carrera']['id']),array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $carrera['Carrera']['id']),array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Estas seguro que quieres eliminar esta Carrera?', $carrera['Carrera']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('Nueva Carrera'), array('action' => 'add')); ?></li>
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
