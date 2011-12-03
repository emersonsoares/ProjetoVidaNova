<div class="videos view">
    <h2><?php echo __('Video'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($video['Video']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Title'); ?></dt>
        <dd>
            <?php echo h($video['Video']['title']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Url'); ?></dt>
        <dd>
            <?php
            echo $this->Video->embed($video['Video']['url'], array(
                'width' => 450,
                'height' => 300)
            );
            ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Status'); ?></dt>
        <dd>
            <?php echo h($video['Video']['status']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Alternative Content'); ?></dt>
        <dd>
            <?php echo h($video['Video']['alternative_content']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($video['Video']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($video['Video']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('User'); ?></dt>
        <dd>
            <?php echo $this->Html->link($video['User']['id'], array('controller' => 'users', 'action' => 'view', $video['User']['id'])); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Video'), array('action' => 'edit', $video['Video']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Video'), array('action' => 'delete', $video['Video']['id']), null, __('Are you sure you want to delete # %s?', $video['Video']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Videos'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Video'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
    </ul>
</div>
