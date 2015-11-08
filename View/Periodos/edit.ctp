<div class ="container">
	<div class = "row">
			<div class="col-md-6">
<?php echo $this->Form->create('Periodo'); ?>
	<fieldset>
		<legend><?php echo __('Editar Periodo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha',array('class' => 'form-control' , 'label' => 'Fecha'));
		echo $this->Form->input('carrera_id',array('class' => 'form-control' , 'label' => 'Carrera'));
	?>
	</fieldset><br>
<?php echo $this->Form->end(array('label' => 'Guardar', 'class' =>'btn btn-success')); ?>
</div>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Periodo.id')), array('confirm' => __('Estas seguro que deseas eliminar este Periodo?', $this->Form->value('Periodo.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Periodos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Inscripciones'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>