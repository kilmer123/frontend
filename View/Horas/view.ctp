<div class="horas view">
<h2><?php echo __('Hora'); ?></h2>
	<table class= "table table-striped">
		<tr>
		<th><?php echo __('Id'); ?></th>
		<th>
			<?php echo h($hora['Hora']['id']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Hora'); ?></th>
		<th>
			<?php echo h($hora['Hora']['hora']); ?>
			&nbsp;
		</th>
	</tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hora'), array('action' => 'edit', $hora['Hora']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hora'), array('action' => 'delete', $hora['Hora']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hora['Hora']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Horas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hora'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Horarios'); ?></h3>
	<?php if (!empty($hora['Horario'])): ?>
	<table class= "table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Inscripcion Id'); ?></th>
		<th><?php echo __('Dia Id'); ?></th>
		<th><?php echo __('Hora Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hora['Horario'] as $horario): ?>
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
