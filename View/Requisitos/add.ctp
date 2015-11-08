<div class ="container">
	<div class = "row">
			<div class="col-md-6">
<?php echo $this->Form->create('Requisito'); ?>
	<fieldset>
		<legend><?php echo __('Add Requisito'); ?></legend>
	<?php
		echo $this->Form->input('materia_id',array('class' => 'form-control' , 'label' => 'Materia'));
		echo $this->Form->input('requisito_id',array('class' => 'form-control' , 'label' => 'Requisito'));
		echo $this->Form->input('uc',array('class' => 'form-control' , 'label' => 'Uc'));
		echo $this->Form->input('cupo',array('class' => 'form-control' , 'label' => 'Cupo'));
	?>
	</fieldset><br>
<?php echo $this->Form->end(array('label' => 'Guardar', 'class' =>'btn btn-success')); ?>
</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Requisitos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>