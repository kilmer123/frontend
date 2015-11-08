<div class ="container">
	<div class = "row">
			<div class="col-md-6">
				<?php echo $this->Form->create('Sede', array('role' => 'form' )); ?><p>

				<fieldset>
					<h2><?php echo __('Registrar Sede'); ?></h2>
	<?php
		echo $this->Form->input('sede', array('class' => 'form-control' , 'label' => 'Nombre Sede'));
	?>
	</fieldset>
	<p>
<?php echo $this->Form->end(array('label' => 'Registrar ', 'class' =>'btn btn-success')); ?>
</p>

<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Sedes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
