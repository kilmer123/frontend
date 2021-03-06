<div class="carreras form">
<?php echo $this->Form->create('Carrera'); ?>
	<fieldset>
		<legend><?php echo __('Editar Carrera'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('carrera');
		echo $this->Form->input('area_id');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Guardar', 'class' =>'btn btn-success')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Carrera.id')), array('confirm' => __('Estas seguro que quieres eliminar esta Carrera ?', $this->Form->value('Carrera.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Carreras'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Periodos'), array('controller' => 'periodos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Periodo'), array('controller' => 'periodos', 'action' => 'add')); ?> </li>
	</ul>
</div>
