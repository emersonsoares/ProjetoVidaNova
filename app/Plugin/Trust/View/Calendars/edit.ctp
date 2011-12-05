<div class="calendars form">
    <?php echo $this->Form->create('Calendar'); ?>
    <fieldset>
        <legend><?php echo __('Edit Calendar'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('title');
        echo $this->Form->input('location');
        echo $this->Form->input('date');
        echo $this->Form->input('time');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Calendar.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Calendar.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Calendars'), array('action' => 'index')); ?></li>
    </ul>
</div>
