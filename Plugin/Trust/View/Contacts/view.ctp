<div class="contacts view">
    <h2><?php echo __('Contact'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($contact['Contact']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Content'); ?></dt>
        <dd>
            <?php echo h($contact['Contact']['content']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Alternative Content'); ?></dt>
        <dd>
            <?php echo h($contact['Contact']['alternative_content']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Email'); ?></dt>
        <dd>
            <?php echo h($contact['Contact']['email']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Location'); ?></dt>
        <dd>
            <?php echo h($contact['Contact']['location']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Latitude'); ?></dt>
        <dd>
            <?php echo h($contact['Contact']['latitude']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Longitude'); ?></dt>
        <dd>
            <?php echo h($contact['Contact']['longitude']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Contact'), array('action' => 'edit', $contact['Contact']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Contact'), array('action' => 'delete', $contact['Contact']['id']), null, __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Contact'), array('action' => 'add')); ?> </li>
    </ul>
</div>
