<!--Start Main Content-->
<div class="main-content">
    <!-- Post Item #1 -->
    <div class="post-item-single">
        <!-- Post Title -->
        <div class="post-title">
            <h1><?php echo $this->Html->link($video['Video']['title'], ''); ?></h1>
        </div>
        <!-- Post Entry -->
        <!-- Post Meta -->
        <div class="post-meta">
            <div class="alignright">                        
                <div class="post-meta-bg">
                    <span class="icon icon144"></span>
                    <span class="label"><?php echo 'Postado em ', $this->Time->format('d/m/Y', $video['Video']['created']), ' por ', $video['User']['username']; ?></span>
                </div>
            </div>
        </div>
        <!-- End Post Meta -->
        <!-- Post Entry -->
        <div class="post-entry">
            <?php
            echo $this->Video->embed($video['Video']['url'], array(
                'width' => 630,
                'height' => 400
            ));
            ?>
            <p><?php echo $video['Video']['alternative_content']; ?></p>
            <div style="float: left; width: 630px; position: relative;">
                <div class="ornament" style="clear: both; margin: 10px 0 10px 0; float: left;"></div>
                <?php echo $video['Video']['content'] ?>
            </div>
            <div class="ornament" style="clear: both; margin: 10px 0 10px 0; float: left;"></div>
        </div>
        <!-- End Post Entry -->
    </div>
    <!-- End Post Item -->
</div>
<!--End Main Content-->