<div class="members view">
    <h2><?php echo __('Member'); ?></h2>
    <dl>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($member['Member']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Content'); ?></dt>
        <dd>
            <?php echo $member['Member']['content']; ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Alternative Content'); ?></dt>
        <dd>
            <?php echo $member['Member']['alternative_content']; ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Cover'); ?></dt>
        <dd>
            <?php
            echo $this->Html->image($this->Thumbnail->render($member['Member']['cover'], array(
                        'path' => 'uploads' . DS . 'images',
                        'newWidth' => 300,
                        'newHeight' => 200,
                        'quality' => 100,
                        'resizeOption' => 'landscape'
                    )));
            ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Member'), array('action' => 'edit', $member['Member']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Member'), array('action' => 'delete', $member['Member']['id']), null, __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?> </li>
    </ul>
</div>
