<div class ="container">
	<div class = "row">
			<div class="col-md-6">
<?php echo $this->Form->create('Horario'); ?>
	<fieldset>
		<legend><?php echo __('Add Horario'); ?></legend>
	<?php
		echo $this->Form->input('inscripcion_id',array('class' => 'form-control' , 'label' => 'Inscripcion'));
		echo $this->Form->input('dia_id',array('class' => 'form-control' , 'label' => 'Dia'));
		echo $this->Form->input('hora_id',array('class' => 'form-control' , 'label' => 'Hora'));
	?>
	</fieldset><br>
<?php echo $this->Form->end(array('label' => 'Guardar', 'class' =>'btn btn-success')); ?>
</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Horarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Inscripcions'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dias'), array('controller' => 'dias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dia'), array('controller' => 'dias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horas'), array('controller' => 'horas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hora'), array('controller' => 'horas', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>