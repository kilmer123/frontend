<div class ="container">
	<div class = "row">
			<div class="col-md-6">
				<?php echo $this->Form->create('Area', array('role' => 'form' )); ?><p>

				<fieldset>
					<h2><?php echo __('Registrar Area'); ?></h2>
	<?php
		echo $this->Form->input('area',array('class' => 'form-control' , 'label' => 'Nombre Area'));
		echo $this->Form->input('sede_id',array('class' => 'form-control' , 'label' => 'Sede'));
	?>
	</fieldset>
	<p>
<?php echo $this->Form->end(array('label' => 'Registrar Area', 'class' =>'btn btn-success')); ?>
</p>

<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Areas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		
	</ul>
</div>
</div>