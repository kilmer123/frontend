<div class="requisitos view">
<h2><?php echo __('Requisito'); ?></h2>
	<table class= "table table-striped">
		<tr>
		<th><?php echo __('Id'); ?></th>
		<th>
			<?php echo h($requisito['Requisito']['id']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Materia'); ?></th>
		<th>
			<?php echo $this->Html->link($requisito['Materia']['materia'], array('controller' => 'materias', 'action' => 'view', $requisito['Materia']['id'])); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Requisito Id'); ?></th>
		<th>
			<?php echo h($requisito['Requisito']['requisito_id']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Uc'); ?></th>
		<th>
			<?php echo h($requisito['Requisito']['uc']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Cupo'); ?></th>
		<th>
			<?php echo h($requisito['Requisito']['cupo']); ?>
			&nbsp;
		</th>
	</tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Requisito'), array('action' => 'edit', $requisito['Requisito']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Requisito'), array('action' => 'delete', $requisito['Requisito']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $requisito['Requisito']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisitos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisito'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
