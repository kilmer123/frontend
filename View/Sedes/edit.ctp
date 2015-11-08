<div class ="container">
	<div class = "row">
			<div class="col-md-6">
<?php echo $this->Form->create('Sede'); ?>
	<fieldset>
		<legend><?php echo __('Editar Sede'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sede', array('class' => 'form-control' , 'label' => 'Nombre Sede'));
	?>
	</fieldset><br>
<?php echo $this->Form->end(array('label' => 'Editar ', 'class' =>'btn btn-success')); ?>
</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sede.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Sede.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>