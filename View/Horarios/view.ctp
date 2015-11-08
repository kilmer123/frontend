<div class="horarios view">
<h2><?php echo __('Horario'); ?></h2>
	<table class= "table table-striped">
		<tr>
		<th><?php echo __('Id'); ?></th>
		<th>
			<?php echo h($horario['Horario']['id']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Inscripcion'); ?></th>
		<th>
			<?php echo $this->Html->link($horario['Inscripcion']['estudiante_id'], array('controller' => 'inscripcions', 'action' => 'view', $horario['Inscripcion']['id'])); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Dia'); ?></th>
		<th>
			<?php echo $this->Html->link($horario['Dia']['dia'], array('controller' => 'dias', 'action' => 'view', $horario['Dia']['id'])); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Hora'); ?></th>
		<th>
			<?php echo $this->Html->link($horario['Hora']['hora'], array('controller' => 'horas', 'action' => 'view', $horario['Hora']['id'])); ?>
			&nbsp;
		</th>
	</tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Horario'), array('action' => 'edit', $horario['Horario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Horario'), array('action' => 'delete', $horario['Horario']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $horario['Horario']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripcions'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dias'), array('controller' => 'dias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dia'), array('controller' => 'dias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horas'), array('controller' => 'horas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hora'), array('controller' => 'horas', 'action' => 'add')); ?> </li>
	</ul>
</div>
