<div class ="container">
	<div class = "row">
			<div class="col-md-6">
				<?php echo $this->Form->create('Seccion', array('role' => 'form' )); ?><p>

				<fieldset>
					<h2><?php echo __('Registrar Seccion'); ?></h2>
	<?php
		echo $this->Form->input('seccion',array('class' => 'form-control' , 'label' => 'Nombre seccion'));
		echo $this->Form->input('materia_id',array('class' => 'form-control' , 'label' => 'Materia'));
	?>
	</fieldset>
	<p>
<?php echo $this->Form->end(array('label' => 'Registrar seccion', 'class' =>'btn btn-success')); ?>
</p>

<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista de secciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		
	</ul>
</div>
</div>
