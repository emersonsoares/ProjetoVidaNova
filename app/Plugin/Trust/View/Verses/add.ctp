<div class="verses form">
    <?php echo $this->Form->create('Verse'); ?>
    <fieldset>
        <legend><?php echo __('Add Verse'); ?></legend>
        <?php
        echo $this->Form->input('content');
        echo $this->Form->input('author');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Verses'), array('action' => 'index')); ?></li>
    </ul>
</div>
