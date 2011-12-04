<div class="intro-slider">
    <!--Start s3Slider-->
    <div id="s3slider">
        <ul id="s3sliderContent">
            <?php foreach ($featuredPosts as $featuredPost) { ?>
                <li class="s3sliderImage">
                    <?php
                    echo $this->Html->image($this->Thumbnail->render($featuredPost['Post']['cover'], array(
                                'newWidth' => 620,
                                'newHeight' => 415,
                                'quality' => 100,
                                'resizeOption' => 'crop')
                            ), array(
                        'url' => array('controller' => 'posts', 'action' => 'view', $featuredPost['Post']['id'], Inflector::slug($featuredPost['Post']['title']))
                    ));
                    ?>
                    <span><?php echo strip_tags($featuredPost['Post']['alternative_content']); ?> <?php echo $this->Html->link('>> Leia mais', array('controller' => 'posts', 'action' => 'view', $featuredPost['Post']['id'], Inflector::slug($featuredPost['Post']['title']))); ?></span>
                </li>
            <?php } ?>
        </ul>
    </div>
    <!--End Slider-->
    <!--End Post-->        
</div>
<!--End Main Content-->
<!--Start Welcome Message-->
<div class="intro-welcome">
    <a href="#" class="heading"><h1>Projeto Vida Nova</h1></a>
    <p><?php echo $about; ?></p>
</div>
<!--End Welcome Message-->
<div class="clear"></div>
</div>
<!--End Content Wrapper-->
</div>
<!--End Content Background-->

<!--Start QuoteOfTheWeek-->
<div class="weekly-quote">
    <!--Start Quotes list-->
    <ul id="quote-rotator">
        <?php foreach ($lastVerses as $verse): ?>
            <li>
                <blockquote><?php echo $verse['Verse']['content'], ' - ', $verse['Verse']['author']; ?></blockquote>                 
            </li>
        <?php endforeach; ?>
    </ul>
    <!--End Quotes List-->
</div>
<!--End QuoteOfTheWeek-->

<!--Start Content Background-->
<div class="content-background">
    <!--Start Content Wrapper-->
    <div class="content-wrapper">
        <!--Start Main Content-->
        <div class="main-content">
            <?php foreach ($posts as $post) { ?>
                <!-- Post Item #1 -->
                <?php echo $this->Html->link('<h1>' . $post['Post']['title'] . '</h1>', array('controller' => 'posts', 'action' => 'view', $post['Post']['id'], Inflector::slug($post['Post']['title'])), array('escape' => false)); ?>

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
                <!-- End Post Item -->
            <?php } ?>
        </div>