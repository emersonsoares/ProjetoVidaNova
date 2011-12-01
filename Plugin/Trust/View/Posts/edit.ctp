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
<div class="posts form">
    <?php echo $this->Form->create('Post', array('enctype' => 'multipart/form-data')); ?>
    <fieldset>
        <legend><?php echo __('Edit Post'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('title');
        echo $this->Form->input('content', array('id ' => 'mce_content'));
        echo $this->Form->input('alternative_content', array('type' => 'textarea', 'id'=>'mce_alternative_content'));
        echo $this->Form->input('status', array(
            'options' => array('Active' => 'Active', 'Inactive' => 'Inactive'),
            'empty' => 'choose one'));
        echo $this->Form->input('featured', array(
            'options' => array('Yes' => 'Yes', 'No' => 'No'),
            'empty' => 'choose one'));

        echo $this->Html->image($this->Thumbnail->render($this->request->data['Post']['cover'], array(
                    'newWidth' => 300,
                    'newHeight' => 300,
                    'quality' => 100,
                    'resizeOption' => 'auto'
                )));
        echo $this->Form->input('cover', array('type' => 'file'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Post.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Post.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
    </ul>
</div>
