<div class="calendars view">
    <h2><?php echo __('Calendar'); ?></h2>
    <dl>
        <dt><?php echo __('Title'); ?></dt>
        <dd>
            <?php echo h($calendar['Calendar']['title']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Location'); ?></dt>
        <dd>
            <?php echo h($calendar['Calendar']['location']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Date/Time'); ?></dt>
        <dd>
            <?php echo $this->Time->format('d/m/Y H:i', h($calendar['Calendar']['date'].' '.$calendar['Calendar']['time'])); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Calendar'), array('action' => 'edit', $calendar['Calendar']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Calendar'), array('action' => 'delete', $calendar['Calendar']['id']), null, __('Are you sure you want to delete # %s?', $calendar['Calendar']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Calendars'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Calendar'), array('action' => 'add')); ?> </li>
    </ul>
</div>
