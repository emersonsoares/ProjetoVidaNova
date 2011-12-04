<div class="serviceTimes view">
<h2><?php  echo __('Service Time');?></h2>
	<dl>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($serviceTime['ServiceTime']['content']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service Time'), array('action' => 'edit', $serviceTime['ServiceTime']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service Time'), array('action' => 'delete', $serviceTime['ServiceTime']['id']), null, __('Are you sure you want to delete # %s?', $serviceTime['ServiceTime']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Service Times'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Time'), array('action' => 'add')); ?> </li>
	</ul>
</div>
