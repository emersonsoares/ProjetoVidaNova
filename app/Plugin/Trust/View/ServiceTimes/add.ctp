<div class="serviceTimes form">
<?php echo $this->Form->create('ServiceTime');?>
	<fieldset>
		<legend><?php echo __('Add Service Time'); ?></legend>
	<?php
		echo $this->Form->input('content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Service Times'), array('action' => 'index'));?></li>
	</ul>
</div>
