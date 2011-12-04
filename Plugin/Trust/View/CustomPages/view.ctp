<div class="pages view">
    <h2><?php echo __('Custom Page'); ?></h2>
    <dl>
        <dt><?php echo __('User'); ?></dt>
        <dd>
            <?php echo $this->Html->link($customPage['User']['username'], array('controller' => 'users', 'action' => 'view', $customPage['User']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Title'); ?></dt>
        <dd>
            <?php echo h($customPage['CustomPage']['title']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Content'); ?></dt>
        <dd>
            <?php echo $customPage['CustomPage']['content']; ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Alternative Content'); ?></dt>
        <dd>
            <?php echo $customPage['CustomPage']['alternative_content']; ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Custom Page'), array('action' => 'edit', $customPage['CustomPage']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Custom Page'), array('action' => 'delete', $customPage['CustomPage']['id']), null, __('Are you sure you want to delete # %s?', $customPage['CustomPage']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Custom Pages'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Custom Page'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
    </ul>
</div>
