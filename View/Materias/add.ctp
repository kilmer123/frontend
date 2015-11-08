<div class ="container">
	<div class = "row">
			<div class="col-md-6">
<?php echo $this->Form->create('Materia'); ?>
	<fieldset>
		<legend><?php echo __('Añadir Materia'); ?></legend>
	<?php
		echo $this->Form->input('Materia',array('class' => 'form-control' , 'label' => 'Materia'));
		echo $this->Form->input('Semestre - Año',array('class' => 'form-control' , 'label' => 'Semestre'));
		echo $this->Form->input('Carrera_id',array('class' => 'form-control' , 'label' => 'Carrera'));
		echo $this->Form->input('Uc',array('class' => 'form-control' , 'label' => 'Uc'));
	?>
	</fieldset><br>
<?php echo $this->Form->end(array('label' => 'Guardar', 'class' =>'btn btn-success')); ?>
</div>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista de Materias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Inscripcions'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Requisitos'), array('controller' => 'requisitos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Requisito'), array('controller' => 'requisitos', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>