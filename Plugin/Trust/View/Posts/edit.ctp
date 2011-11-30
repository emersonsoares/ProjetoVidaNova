<div class="posts form">
    <?php echo $this->Form->create('Post', array('enctype' => 'multipart/form-data')); ?>
    <fieldset>
        <legend><?php echo __('Edit Post'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('title');
        echo $this->Form->input('content');
        echo $this->Form->input('alternative_content', array('type' => 'textarea'));
        echo $this->Form->input('status', array(
            'options' => array('Active' => 'Active', 'Inactive' => 'Inactive'),
            'empty' => 'choose one'));
        echo $this->Form->input('featured', array(
            'options' => array('Yes' => 'Yes', 'No' => 'No'),
            'empty' => 'choose one'));
        if (!empty($this->request->data['Post']['cover'])) {
            echo $this->Html->image($this->Thumbnail->render($this->request->data['Post']['cover'], array(
                        'path' => 'uploads' . DS . 'images',
                        'newWidth' => 300,
                        'newHeight' => 300,
                        'quality' => 100,
                        'resizeOption' => 'auto'
                    )));
            echo $this->Form->input('Post.cover.remove', array('type' => 'checkbox'));
        } else {
            echo $this->Form->input('cover', array('type' => 'file'));
        }
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
