<!--Start Main Content-->
<div class="main-content">
    <!-- Post Item #1 -->
    <div class="post-item-single">
        <!-- Post Title -->
        <div class="post-title">
            <a href="#"><h1><?php echo $post['Post']['title'] ?></h1></a>
        </div>
        <!-- Post Entry -->
        <!-- Post Meta -->
        <div class="post-meta">
            <div class="alignright">                        
                <div class="post-meta-bg">
                    <span class="icon icon144"></span>
                    <span class="label"><?php echo 'Postado em ', $this->Time->format('d/m/Y', $post['Post']['created']), ' por ', $post['User']['username']; ?></span>
                </div>
            </div>
        </div>
        <!-- End Post Meta -->
        <!-- Post Entry -->
        <div class="post-entry">
            <?php
            echo $this->Html->image($this->Thumbnail->render($post['Post']['cover'], array(
                        'newWidth' => 350,
                        'newHeight' => 300,
                        'resizeOption' => 'landscape',
                        'quality' => 100)
                    ));
            ?>
            <?php echo $post['Post']['alternative_content']; ?>
            <div style="float: left; width: 630px; position: relative;">
                <div class="ornament" style="clear: both; margin: 10px 0 10px 0; float: left;"></div>
                <?php echo $post['Post']['content'] ?>
            </div>
            <div class="ornament" style="clear: both; margin: 10px 0 10px 0; float: left;"></div>
        </div>
        <!-- End Post Entry -->
    </div>
    <!-- End Post Item -->
</div>
<!--End Main Content-->