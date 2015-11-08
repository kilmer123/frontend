<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<table class= "table table-striped">
		<tr>
		<th><?php echo __('Id'); ?></th>
		<th>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Nombre'); ?></th>
		<th>
			<?php echo h($usuario['Usuario']['nombre']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Apellido'); ?></th>
		<th>
			<?php echo h($usuario['Usuario']['apellido']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Tipo'); ?></th>
		<th>
			<?php echo $this->Html->link($usuario['Tipo']['tipo'], array('controller' => 'tipos', 'action' => 'view', $usuario['Tipo']['id'])); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Clave'); ?></th>
		<th>
			<?php echo h($usuario['Usuario']['clave']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Created'); ?></th>
		<th>
			<?php echo h($usuario['Usuario']['created']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Modified'); ?></th>
		<th>
			<?php echo h($usuario['Usuario']['modified']); ?>
			&nbsp;
		</th>
	</tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $usuario['Usuario']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
