<div class="dias index">
	<h2><?php echo __('Dias'); ?></h2>
	<table class= "table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dia'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dias as $dia): ?>
	<tr>
		<td><?php echo h($dia['Dia']['id']); ?>&nbsp;</td>
		<td><?php echo h($dia['Dia']['dia']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dia['Dia']['id']),array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dia['Dia']['id']),array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dia['Dia']['id']),array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Are you sure you want to delete # %s?', $dia['Dia']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Dia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
