<?php
$this->TinyMce->editor(array(
    'theme' => 'advanced',
    'mode' => 'exact',
    'height' => '300',
    'elements' => 'mce_content',
    'plugins' => 'autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave',
));
?>
<div class="videos form">
    <?php echo $this->Form->create('Video'); ?>
    <fieldset>
        <legend><?php echo __('Add Video'); ?></legend>
        <?php
        echo $this->Form->input('title');
        echo $this->Form->input('url');
        echo $this->Form->input('status', array(
            'options' => array('Active' => 'Active', 'Inactive' => 'Inactive'),
            'empty' => 'choose one'
        ));
        echo $this->Form->input('alternative_content');
        echo $this->Form->input('content', array('type' => 'textarea', 'id' => 'mce_content'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Videos'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
    </ul>
</div>
