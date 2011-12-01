<?php
$this->TinyMce->editor(array(
    'theme' => 'advanced',
    'mode' => 'exact',
    'height' => '500',
    'elements' => 'location',
    'plugins' => 'autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave',
));

$this->TinyMce->editor(array(
    'theme' => 'simple',
    'mode' => 'exact',
    'height' => '200',
    'elements' => 'mce_alternative_content',
    'plugins' => 'autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave',
));
?>
<div class="contacts form">
    <?php echo $this->Form->create('Contact'); ?>
    <fieldset>
        <legend><?php echo __('Add Contact'); ?></legend>
        <?php
        echo $this->Form->input('content', array('id' => 'mce_content'));
        echo $this->Form->input('alternative_content', array('id' => 'mce_alternative_content'));
        echo $this->Form->input('email');
        echo $this->Form->input('phone');
        echo $this->Form->input('facebook');
        echo $this->Form->input('twitter');
        echo $this->Form->input('google');
        echo $this->Form->input('location', array('id' => 'location', 'type' => 'textarea'));
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
