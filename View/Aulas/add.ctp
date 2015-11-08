<div class ="container">
	<div class = "row">
			<div class="col-md-6">
<?php echo $this->Form->create('Aula'); ?>
	<fieldset>
		<legend><?php echo __('Añadir Aula'); ?></legend>
	<?php
		echo $this->Form->input('aula',array('class' => 'form-control' , 'label' => 'Aula'));
	?>
	</fieldset><br>
<?php echo $this->Form->end(array('label' => 'Guardar', 'class' =>'btn btn-success')); ?>
</div>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista de Aulas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Incsripciones'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>	