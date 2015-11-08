<div class ="container">
	<div class = "row">
			<div class="col-md-6">
<?php echo $this->Form->create('Area'); ?>
	<fieldset>
		<legend><?php echo __('Edit Area'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('area',array('class' => 'form-control' , 'label' => 'Nombre de Area'));
		echo $this->Form->input('sede_id',array('class' => 'form-control' , 'label' => 'Sede'));
	?>
	</fieldset><br>
<?php echo $this->Form->end(array('label' => 'Editar Area', 'class' =>'btn btn-success')); ?>
</div>
</div>



<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Area.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Area.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Areas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
