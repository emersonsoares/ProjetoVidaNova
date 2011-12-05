<?php
$this->TinyMce->editor(array(
    'theme' => 'simple',
    'mode' => 'exact',
    'height' => '200',
    'elements' => 'mce_content',
    'plugins' => 'autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave',
));
?>
<div class="testimonials form">
    <?php echo $this->Form->create('Testimonial', array('enctype' => 'multipart/form-data')); ?>
    <fieldset>
        <legend><?php echo __('Edit Testimonial'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('content', array('id' => 'mce_content'));
        echo $this->Form->input('author');
        echo $this->Html->image($this->Thumbnail->render($this->request->data['Testimonial']['cover'], array(
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

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Testimonial.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Testimonial.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Testimonials'), array('action' => 'index')); ?></li>
    </ul>
</div>
