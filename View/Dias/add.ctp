<div class ="container">
	<div class = "row">
			<div class="col-md-6">
<?php echo $this->Form->create('Dia'); ?>
	<fieldset>
		<legend><?php echo __('Add Dia'); ?></legend>
	<?php
		echo $this->Form->input('dia',array('class' => 'form-control' , 'label' => 'Dia'));
	?>
	</fieldset><br>
<?php echo $this->Form->end(array('label' => 'Guardar', 'class' =>'btn btn-success')); ?>
</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>