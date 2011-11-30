<div class="posts form">
    <?php echo $this->Form->create('Post', array('enctype' => 'multipart/form-data')); ?>
    <fieldset>
        <legend><?php echo __('Add Post'); ?></legend>
        <?php
        echo $this->Form->input('title');
        echo $this->Form->input('content');
        echo $this->Form->input('alternative_content', array('type' => 'textarea'));
        echo $this->Form->input('status', array(
            'options' => array('Active' => 'Active', 'Inactive' => 'Inactive'),
            'empty' => 'choose one'));
        echo $this->Form->input('featured', array(
            'options' => array('Yes' => 'Yes', 'No' => 'No'),
            'empty' => 'choose one'));
        echo $this->Form->input('cover', array('type' => 'file'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
    </ul>
</div>
