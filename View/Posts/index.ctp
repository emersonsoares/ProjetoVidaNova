<!--Start Main Content-->
<div class="main-content">
    <?php echo $this->Html->link($this->Html->tag('h1', 'Publicacoes'), '#', array('escape' => false)); ?>
    <?php foreach ($posts as $post) { ?>
        <!-- Post Item #1 -->
        <div class="post-item">
            <!-- Post Title -->
            <div class="post-title">
                <h1><?php echo $this->Html->link($post['Post']['title'], array('controller'=>'posts', 'action'=>'view', $post['Post']['id'], $post['Post']['title']));?></h1>
            </div>
            <!-- Post Meta -->
            <div class="post-meta">
                <div class="alignright">
                    <div class="post-meta-bg">
                        <span class="icon icon144"></span>
                        <span class="label"><?php echo 'Postado em ', $this->Time->format('d/m/Y', $post['Post']['created']), ' by ', $post['User']['username']; ?></span>
                    </div>
                </div>
            </div>
            <!-- End Post Meta -->
            <div class="post-item">
                <!-- Post Entry -->
                <div class="post-entry">
                    <?php
                    echo $this->Html->image($this->Thumbnail->render($post['Post']['cover'], array(
                                'newWidth' => 210,
                                'newHeight' => 200,
                                'quality' => 100,
                                'resizeOption' => 'landscape')
                            ), array(
                        'class' => 'featured-list',
                        'url' => array('controller' => 'posts', 'action' => 'view', $post['Post']['id'], Inflector::slug($post['Post']['title']))
                    ));
                    ?>
                    <?php echo $post['Post']['alternative_content']; ?>
                </div>
                <!-- End Post Entry -->
                <!-- read more-->
            </div>
            <?php echo $this->Html->link('Ver Mais', array('action' => 'view', 'controller' => 'posts', $post['Post']['id'], Inflector::slug($post['Post']['title'])), array('class' => 'ver-mais')) ?>
            <div class="main ornament" style="margin-top:-15px; float: left;"></div>
        </div>
        <!-- End Post Item -->  
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