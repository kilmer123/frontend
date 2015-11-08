<div class ="container">
	<div class = "row">
			<div class="col-md-6">
<?php echo $this->Form->create('Cohorte'); ?>
	<fieldset>
		<legend><?php echo __('Editar Cohorte'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cohorte',array('class' => 'form-control' , 'label' => 'Cohorte'));
	?>
	</fieldset><br>
<?php echo $this->Form->end(array('label' => 'Guardar', 'class' =>'btn btn-success')); ?>
</div>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Cohorte.id')), array('confirm' => __('Estas seguro que quieres eliminar este Cohorte ??', $this->Form->value('Cohorte.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Cohortes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>