<div class="verses view">
    <h2><?php echo __('Verse'); ?></h2>
    <dl>
        <dt><?php echo __('Content'); ?></dt>
        <dd>
            <?php echo h($verse['Verse']['content']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Author'); ?></dt>
        <dd>
            <?php echo h($verse['Verse']['author']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Verse'), array('action' => 'edit', $verse['Verse']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Verse'), array('action' => 'delete', $verse['Verse']['id']), null, __('Are you sure you want to delete # %s?', $verse['Verse']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Verses'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Verse'), array('action' => 'add')); ?> </li>
    </ul>
</div>
