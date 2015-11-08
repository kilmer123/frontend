<div class="estudiantes index">
	<h2><?php echo __('Estudiantes'); ?></h2>
	<table class= "table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('cedula'); ?></th>
			<th><?php echo $this->Paginator->sort('carrera_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($estudiantes as $estudiante): ?>
	<tr>
		<td><?php echo h($estudiante['Estudiante']['id']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['cedula']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estudiante['Carrera']['carrera'], array('controller' => 'carreras', 'action' => 'view', $estudiante['Carrera']['id'])); ?>
		</td>
		</td>
		<td><?php echo h($estudiante['Estudiante']['created']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['modified']); ?>&nbsp;</td>
		<td class="Acciones">
			<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $estudiante['Estudiante']['id']), array('class' => 'btn btn-sm btn-default')); ?>&nbsp;
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $estudiante['Estudiante']['id']), array('class' => 'btn btn-sm btn-default')); ?>&nbsp;
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $estudiante['Estudiante']['id']), array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Estas seguro que deseas eliminarlo?', $estudiante['Estudiante']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
		<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count} en total, comenzando en {:start}, terminando en {:end}')
		));
		?>	</p>
		<ul class="pagination">
			<li> <?php echo $this->Paginator->prev('< ' . __('Anterior'), array('tag' => false), null, array('class' => 'prev disabled')); ?> </li>
			<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
			<li> <?php echo $this->Paginator->next(__('Siguiente') . ' >', array('tag' => false), null, array('class' => 'next disabled')); ?> </li>
			<p>
				</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Estudiante'), array('action' => 'add')); ?></li>

	</ul>
</div>
</p>