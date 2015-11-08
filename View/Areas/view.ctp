<div class="areas view">
<h2><?php echo __('Area'); ?></h2>
<table class= "table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th>
			<?php echo h($area['Area']['id']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Area'); ?></th>
		<th>
			<?php echo h($area['Area']['area']); ?>
			&nbsp;
		</th>
	</tr>
	<tr>
		<th><?php echo __('Sede'); ?></th>
		<th>
			<?php echo $this->Html->link($area['Sede']['sede'], array('controller' => 'sedes', 'action' => 'view', $area['Sede']['id'])); ?>
			&nbsp;
		</th>
	</tr>
	
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Area'), array('action' => 'edit', $area['Area']['id']),array('class' => 'btn btn-sm btn-default')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Area'), array('action' => 'delete', $area['Area']['id']),array('class' => 'btn btn-sm btn-default'), array(), __('Are you sure you want to delete # %s?', $area['Area']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('action' => 'index'),array('class' => 'btn btn-sm btn-default')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('action' => 'add'),array('class' => 'btn btn-sm btn-default')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index'),array('class' => 'btn btn-sm btn-default')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add'),array('class' => 'btn btn-sm btn-default')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carreras'), array('controller' => 'carreras', 'action' => 'index'),array('class' => 'btn btn-sm btn-default')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrera'), array('controller' => 'carreras', 'action' => 'add'),array('class' => 'btn btn-sm btn-default')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Carreras'); ?></h3>
	<?php if (!empty($area['Carrera'])): ?>
	<table class= "table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Carrera'); ?></th>
		<th><?php echo __('Area Id'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($area['Carrera'] as $carrera): ?>
		<tr>
			<td><?php echo $carrera['id']; ?></td>
			<td><?php echo $carrera['carrera']; ?></td>
			<td><?php echo $carrera['area_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'carreras', 'action' => 'view', $carrera['id']),array('class' => 'btn btn-sm btn-default')); ?>

				<?php echo $this->Html->link(__('Edit'), array('controller' => 'carreras', 'action' => 'edit', $carrera['id']),array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'carreras', 'action' => 'delete', $carrera['id']),array('class' => 'btn btn-sm btn-default'), array(), __('Are you sure you want to delete # %s?', $carrera['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	
<?php endif; ?>
</table>
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Carrera'), array('controller' => 'carreras', 'action' => 'add'),array('class' => 'btn btn-sm btn-default')); ?> </li>
		</ul>
	</div>
</div>
