<div class ="container">
	<div class = "row">
			<div class="col-md-6">
				<?php echo $this->Form->create('Estudiante', array('role' => 'form' )); ?><p>

				<fieldset>
					<h2><?php echo __('Registrar Estudiante'); ?></h2>
	<?php
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
		echo $this->Form->input('ucc',array('class' => 'form-control' , 'label' => 'Ucc '));
		echo $this->Form->input('uca',array('class' => 'form-control' , 'label' => 'Uca '));
		echo $this->Form->input('cohorte',array('class' => 'form-control' , 'label' => 'Cohorte '));
		echo $this->Form->input('estado',array('class' => 'form-control' , 'label' => 'Estado '));
		echo $this->Form->input('promedio',array('class' => 'form-control' , 'label' => 'Promedio '));
		echo $this->Form->input('tipo',array('class' => 'form-control' , 'label' => 'Tipo'));
		
	?>
	</fieldset>
	<p>
<?php echo $this->Form->end(array('label' => 'Registrar ', 'class' =>'btn btn-success')); ?>

</p>

<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Estudiantes'), array('action' => 'index')); ?></li>
		
	</ul>
</div>
</div>