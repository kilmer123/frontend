<div class="sedes view">
<h2><?php echo __('Sede'); ?></h2>
<table class= "table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th>
			<?php echo h($sede['Sede']['id']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Sede'); ?></th>
		<th>
			<?php echo h($sede['Sede']['sede']); ?>
			&nbsp;
		</th>
	</tr>
	<table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sede'), array('action' => 'edit', $sede['Sede']['id']), array('class' => 'btn btn-sm btn-default')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sede'), array('action' => 'delete', $sede['Sede']['id']), array('class' => 'btn btn-sm btn-default'), array(), __('Are you sure you want to delete # %s?', $sede['Sede']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('action' => 'index'), array('class' => 'btn btn-sm btn-default')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('action' => 'add'), array('class' => 'btn btn-sm btn-default')); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index'), array('class' => 'btn btn-sm btn-default')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add'), array('class' => 'btn btn-sm btn-default')); ?> </li>
	</ul>
</div>
	<h3><?php echo __('Related Areas'); ?></h3>
	<?php if (!empty($sede['Area'])): ?>
	<table class= "table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Area'); ?></th>
		<th><?php echo __('Sede Id'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($sede['Area'] as $area): ?>
		<tr>
			<td><?php echo $area['id']; ?></td>
			<td><?php echo $area['area']; ?></td>
			<td><?php echo $area['sede_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'areas', 'action' => 'view', $area['id']),array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'areas', 'action' => 'edit', $area['id']),array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'areas', 'action' => 'delete', $area['id']),array('class' => 'btn btn-sm btn-default'), array(), __('Are you sure you want to delete # %s?', $area['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add'),array('class' => 'btn btn-sm btn-default')); ?> </li>
		</ul>
	</div>
</div>
