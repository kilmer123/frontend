<div class ="container">
	<div class = "row">
			<div class="col-md-6">
<?php echo $this->Form->create('Tipo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo',array('class' => 'form-control' , 'label' => 'Tipo'));
	?>
	</fieldset><br>
<?php echo $this->Form->end(array('label' => 'Guardar', 'class' =>'btn btn-success')); ?>
</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tipo.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Tipo.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>