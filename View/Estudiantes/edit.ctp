<div class ="container">
	<div class = "row">
			<div class="col-md-6">
<?php echo $this->Form->create('Estudiante'); ?>
	<fieldset>
		<legend><?php echo __('Editar Estudiante'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre',array('class' => 'form-control' , 'label' => 'Nombre '));
		echo $this->Form->input('apellido',array('class' => 'form-control' , 'label' => 'Apellido '));
		echo $this->Form->input('cedula',array('class' => 'form-control' , 'label' => 'Cedula '));
		echo $this->Form->input('sexo',array('class' => 'form-control' , 'label' => 'Sexo '));
		echo $this->Form->input('telefono',array('class' => 'form-control' , 'label' => 'Telefono '));
		echo $this->Form->input('nacimiento',array('class' => 'form-control' , 'label' => 'Nacimiento '));
		echo $this->Form->input('email',array('class' => 'form-control' , 'label' => 'Email '));
		echo $this->Form->input('dirección',array('class' => 'form-control' , 'label' => 'Dirección '));
		echo $this->Form->input('clave',array('class' => 'form-control' , 'label' => 'Clave'));
		echo $this->Form->input('carrera',array('class' => 'form-control' , 'label' => 'Carrera'));
		echo $this->Form->input('ucc',array('class' => 'form-control' , 'label' => 'Ucc'));
		echo $this->Form->input('uca',array('class' => 'form-control' , 'label' => 'Uca'));
		echo $this->Form->input('cohorte',array('class' => 'form-control' , 'label' => 'Cohorte '));
		echo $this->Form->input('estado',array('class' => 'form-control' , 'label' => 'Estado '));
		echo $this->Form->input('promedio',array('class' => 'form-control' , 'label' => 'Promedio '));
		echo $this->Form->input('tipo',array('class' => 'form-control' , 'label' => 'Tipo'));
	?>
	</fieldset><br>
<?php echo $this->Form->end(array('label' => 'Editar ', 'class' =>'btn btn-success')); ?>
</div>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Estudiante.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Estudiante.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cohortes'), array('controller' => 'cohortes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cohorte'), array('controller' => 'cohortes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripcions'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>