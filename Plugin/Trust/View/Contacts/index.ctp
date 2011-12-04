<?php
$this->TinyMce->editor(array(
    'theme' => 'advanced',
    'mode' => 'exact',
    'height' => '500',
    'elements' => 'mce_content',
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
<div class="contacts">
    <?php echo $this->Form->create('Contact'); ?>
    <fieldset>
        <legend><?php echo __('Edit Contact Informations'); ?></legend>
        <?php
        echo $this->Form->input('id', array('value'=>1));
        echo $this->Form->input('content', array('id' => 'mce_content'));
        echo $this->Form->input('alternative_content', array('type'=>'textarea', 'id'=>'mce_alternative_content'));
        echo $this->Form->input('email');
        echo $this->Form->input('phone');
        echo $this->Form->input('facebook');
        echo $this->Form->input('twitter');
        echo $this->Form->input('google');
        echo $this->Form->input('location');
        echo $this->Form->input('latitude');
        echo $this->Form->input('longitude');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
