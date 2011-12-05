<div class="serviceTimes index">
    <h2><?php echo __('Service Times'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('content'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($serviceTimes as $serviceTime):
            ?>
            <tr>
                <td><?php echo h($serviceTime['ServiceTime']['content']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $serviceTime['ServiceTime']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $serviceTime['ServiceTime']['id'])); ?>
    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $serviceTime['ServiceTime']['id']), null, __('Are you sure you want to delete # %s?', $serviceTime['ServiceTime']['id'])); ?>
                </td>
            </tr>
<?php endforeach; ?>
    </table>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>	</p>

    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Service Time'), array('action' => 'add')); ?></li>
    </ul>
</div>