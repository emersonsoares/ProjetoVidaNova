<!--Start Main Content-->
<div class="main-content">
    <!-- Post Item #1 -->
    <div class="post-item-single">
        <!-- Post Title -->
        <div class="post-title">
            <a href="#"><h1><?php echo $member['Member']['name'] ?></h1></a>
        </div>
        <!-- Post Entry -->
        <!-- Post Entry -->
        <div class="post-entry">
            <?php
            echo $this->Html->image($this->Thumbnail->render($member['Member']['cover'], array(
                        'newWidth' => 350,
                        'newHeight' => 300,
                        'resizeOption' => 'landscape',
                        'quality' => 100)
                    ));
            ?>
            <?php echo $member['Member']['alternative_content']; ?>
            <div style="float: left; width: 630px; position: relative;">
                <div class="ornament" style="clear: both; margin: 10px 0 10px 0; float: left;"></div>
                <?php echo $member['Member']['content'] ?>
            </div>
            <div class="ornament" style="clear: both; margin: 10px 0 10px 0; float: left;"></div>
        </div>
        <!-- End Post Entry -->
    </div>
    <!-- End Post Item -->
</div>
<!--End Main Content-->