<div class="posts view">
    <h2><?php echo __('Post'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($post['Post']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('User'); ?></dt>
        <dd>
            <?php echo $this->Html->link($post['User']['username'], array('controller' => 'users', 'action' => 'view', $post['User']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Title'); ?></dt>
        <dd>
            <?php echo h($post['Post']['title']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Content'); ?></dt>
        <dd>
            <?php echo h($post['Post']['content']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Alternative Content'); ?></dt>
        <dd>
            <?php echo h($post['Post']['alternative_content']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Status'); ?></dt>
        <dd>
            <?php echo h($post['Post']['status']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Featured'); ?></dt>
        <dd>
            <?php echo h($post['Post']['featured']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo $this->Time->format('d/m/y H:i', $post['Post']['created']); ?>&nbsp;
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo $this->Time->format('d/m/y H:i', $post['Post']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Cover'); ?></dt>
        <dd>
            <?php
            echo $this->Html->image($this->Thumbnail->render($post['Post']['cover'], array(
                        'path' => 'uploads' . DS . 'images',
                        'newWidth' => 150,
                        'newHeight' => 100,
                        'quality' => 50,
                        'resizeOption' => 'auto'
                    )));
            ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
    </ul>
</div>
