<div class="testimonials index">
    <h2><?php echo __('Testimonials'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('cover'); ?></th>
            <th><?php echo $this->Paginator->sort('content'); ?></th>
            <th><?php echo $this->Paginator->sort('author'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($testimonials as $testimonial):
            ?>
            <tr>
                <td><?php
        echo $this->Html->image($this->Thumbnail->render($testimonial['Testimonial']['cover'], array(
                    'newWidth' => 64,
                    'newHeight' => 64,
                    'quality' => 100,
                    'resizeOption' => 'crop')
                ));
        ?></td>
                <td><?php echo $testimonial['Testimonial']['content']; ?>&nbsp;</td>
                <td><?php echo h($testimonial['Testimonial']['author']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $testimonial['Testimonial']['id'])); ?>
    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $testimonial['Testimonial']['id'])); ?>
            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $testimonial['Testimonial']['id']), null, __('Are you sure you want to delete # %s?', $testimonial['Testimonial']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Testimonial'), array('action' => 'add')); ?></li>
    </ul>
</div>
