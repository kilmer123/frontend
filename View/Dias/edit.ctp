<div class ="container">
	<div class = "row">
			<div class="col-md-6">
<?php echo $this->Form->create('Dia'); ?>
	<fieldset>
		<legend><?php echo __('Editar Dia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('dia',array('class' => 'form-control' , 'label' => 'Dia'));
	?>
	</fieldset><br>
<?php echo $this->Form->end(array('label' => 'Guardar', 'class' =>'btn btn-success')); ?>
</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Dia.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Dia.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Dias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>