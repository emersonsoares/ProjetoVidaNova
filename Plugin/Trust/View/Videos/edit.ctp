<?php
$this->TinyMce->editor(array(
    'theme' => 'simple',
    'mode' => 'exact',
    'height' => '200',
    'elements' => 'mce_alternative_content',
    'plugins' => 'autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave',
));
?>
<div class="videos form">
    <?php echo $this->Form->create('Video'); ?>
    <fieldset>
        <legend><?php echo __('Edit Video'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('title');
        echo $this->Form->input('url');
        echo $this->Form->input('status', array(
            'options' => array('Active' => 'Active', 'Inactive' => 'Inactive'),
            'empty' => 'choose one'
        ));
        echo $this->Form->input('alternative_content', array('id' => 'mce_alternative_content', 'type' => 'textarea'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Video.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Video.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Videos'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
    </ul>
</div>
