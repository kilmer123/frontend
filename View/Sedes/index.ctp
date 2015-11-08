<div class="sedes index">
	<h2><?php echo __('Sedes'); ?></h2>
	<table class= "table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sede'); ?></th>
				<th class="actions">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($sedes as $sede): ?>
	<tr>
		<td><?php echo h($sede['Sede']['id']); ?>&nbsp;</td>
		<td><?php echo h($sede['Sede']['sede']); ?>&nbsp;</td>
		<td class="actions">
		<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $sede['Sede']['id']), array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $sede['Sede']['id']), array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $sede['Sede']['id']), array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Estas seguro que deseas eliminarlo?', $sede['Sede']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('Nueva Sede'), array('action' => 'add')); ?></li>
	</ul>
</div>
