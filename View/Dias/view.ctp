<div class="dias view">
<h2><?php echo __('Dia'); ?></h2>
	<table class= "table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th>
			<?php echo h($dia['Dia']['id']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Dia'); ?></th>
		<th>
			<?php echo h($dia['Dia']['dia']); ?>
			&nbsp;
		</th>
	</tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dia'), array('action' => 'edit', $dia['Dia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dia'), array('action' => 'delete', $dia['Dia']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $dia['Dia']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Dias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Horarios'); ?></h3>
	<?php if (!empty($dia['Horario'])): ?>
	<table class= "table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Inscripcion Id'); ?></th>
		<th><?php echo __('Dia Id'); ?></th>
		<th><?php echo __('Hora Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dia['Horario'] as $horario): ?>
		<tr>
			<td><?php echo $horario['id']; ?></td>
			<td><?php echo $horario['inscripcion_id']; ?></td>
			<td><?php echo $horario['dia_id']; ?></td>
			<td><?php echo $horario['hora_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'horarios', 'action' => 'view', $horario['id']),array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'horarios', 'action' => 'edit', $horario['id']),array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'horarios', 'action' => 'delete', $horario['id']),array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Are you sure you want to delete # %s?', $horario['id']))); ?>
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
