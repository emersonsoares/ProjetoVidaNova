<div class="main-content">
    <!--Start Sermon item #1-->
    <a href="#" class="heading"><h1><?php echo __('Videos'); ?></h1></a>
    <ul class="media">
        <?php foreach ($videos as $video) { ?>
            <li class="movie">
                <?php echo $this->Html->link($video['Video']['title'], array('controller' => 'videos', 'action' => 'view', $video['Video']['id'], Inflector::slug($video['Video']['title'])), array('class' => 'media-item-title')); ?>
                <p class="media-item-desc"><?php echo $video['Video']['alternative_content'] ?></p>
            </li>
        <?php } ?>
    </ul>
    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>