<div class="testimonials view">
    <h2><?php echo __('Testimonial'); ?></h2>
    <dl>
        <dt><?php echo __('Content'); ?></dt>
        <dd>
            <?php echo $testimonial['Testimonial']['content']; ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Author'); ?></dt>
        <dd>
            <?php echo h($testimonial['Testimonial']['author']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Cover'); ?></dt>
        <dd>
            <?php
            echo $this->Html->image($this->Thumbnail->render($testimonial['Testimonial']['cover'], array(
                        'newWidth' => 200,
                        'newHeight' => 200,
                        'quality' => 100,
                        'resizeOption' => 'landscape')
                    ));
            ?>
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Testimonial'), array('action' => 'edit', $testimonial['Testimonial']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Testimonial'), array('action' => 'delete', $testimonial['Testimonial']['id']), null, __('Are you sure you want to delete # %s?', $testimonial['Testimonial']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Testimonials'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Testimonial'), array('action' => 'add')); ?> </li>
    </ul>
</div>
