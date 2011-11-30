<div class="contacts form">
    <?php echo $this->Form->create('Contact'); ?>
    <fieldset>
        <legend><?php echo __('Add Contact'); ?></legend>
        <?php
        echo $this->Form->input('content');
        echo $this->Form->input('alternative_content');
        echo $this->Form->input('email');
        echo $this->Form->input('phone');
        echo $this->Form->input('facebook');
        echo $this->Form->input('twitter');
        echo $this->Form->input('google');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?></li>
    </ul>
</div>
