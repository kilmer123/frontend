<div class ="container">
	<div class = "row">
			<div class="col-md-6">
<?php echo $this->Form->create('Estado'); ?>
	<fieldset>
		<legend><?php echo __('Edit Estado'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('estado',array('class' => 'form-control' , 'label' => 'Estado'));
	?>
	</fieldset><br>
<?php echo $this->Form->end(array('label' => 'Editar', 'class' =>'btn btn-success')); ?>
</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Estado.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Estado.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Estados'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>