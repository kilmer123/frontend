<div class ="container">
	<div class = "row">
			<div class="col-md-6">
<?php echo $this->Form->create('Inscripcion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Inscripcion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('materia_id',array('class' => 'form-control' , 'label' => 'Materia'));
		echo $this->Form->input('estudiante_id',array('class' => 'form-control' , 'label' => 'Estudiante'));
		echo $this->Form->input('periodo_id',array('class' => 'form-control' , 'label' => 'Periodo'));
		echo $this->Form->input('nota',array('class' => 'form-control' , 'label' => 'Nota'));
		echo $this->Form->input('seccion',array('class' => 'form-control' , 'label' => 'Seccion'));
		echo $this->Form->input('aula_id',array('class' => 'form-control' , 'label' => 'Aula'));
	?>
	</fieldset><br>
<?php echo $this->Form->end(array('label' => 'Editar', 'class' =>'btn btn-success')); ?>
</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Inscripcion.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Inscripcion.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Inscripcions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Periodos'), array('controller' => 'periodos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Periodo'), array('controller' => 'periodos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aulas'), array('controller' => 'aulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aula'), array('controller' => 'aulas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>