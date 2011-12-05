<!--Start Main Content-->
<div class="main-content">
    <?php echo $this->Html->link('<h1>Equipe</h1>', '', array('escape' => false)); ?>
    <?php foreach ($members as $member) { ?>
        <!-- Member Item #1 -->
        <div class="post-item">
            <!-- Member Title -->
            <div class="member-title">
                <h1><?php echo $this->Html->link($member['Member']['name'], ''); ?></h1>
            </div>
            <div class="post-item">
                <!-- Member Entry -->
                <div class="post-entry">
                    <?php
                    echo $this->Html->image($this->Thumbnail->render($member['Member']['cover'], array(
                                'newWidth' => 250,
                                'newHeight' => 200,
                                'quality' => 100,
                                'resizeOption' => 'landscape')
                            ), array(
                        'class' => 'featured-list',
                        'url' => array('controller' => 'members', 'action' => 'view', $member['Member']['id'], Inflector::slug($member['Member']['name']))
                    ));
                    ?>
                    <?php echo $member['Member']['alternative_content']; ?>
                </div>
                <!-- End Member Entry -->
                <!-- read more-->
            </div>
            <?php echo $this->Html->link('Ver Mais', array('action' => 'view', 'controller' => 'members', $member['Member']['id'], Inflector::slug($member['Member']['name'])), array('class' => 'ver-mais')) ?>
            <div class="main ornament" style="margin-top:-15px; float: left;"></div>
        </div>
        <!-- End Member Item -->  
    <?php } ?>
    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<!--End Main Content-->