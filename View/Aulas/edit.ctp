<div class="aulas form">
<?php echo $this->Form->create('Aula'); ?>
	<fieldset>
		<legend><?php echo __('Editar Aula'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('aula',array('class' => 'form-control' , 'label' => 'Aula'));
	?>
	</fieldset><br>
<?php echo $this->Form->end(array('label' => 'Editar', 'class' =>'btn btn-success')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Aula.id')), array('confirm' => __('Estas seguro que quieres eliminar # %s?', $this->Form->value('Aula.aula')))); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Aulas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Inscripciones'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
	</ul>
</div>
