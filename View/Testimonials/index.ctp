<!--Start Main Content-->
<div class="main-content">
    <?php echo $this->Html->link('<h1>Depoimentos</h1>', '', array('escape' => false)); ?>
    <?php foreach ($testimonials as $testimonial) { ?>
        <!-- Testimonial Item #1 -->
        <div class="testimonial-item">
            <!-- Testimonial Title -->
            <div class="testimonial-title">
                <h1><?php echo $this->Html->link($testimonial['Testimonial']['author'], ''); ?></h1>
            </div>
            <!-- End Testimonial Meta -->
            <div class="testimonial-item">
                <!-- Testimonial Entry -->
                <div class="testimonial-entry">
                    <?php
                    echo $this->Html->image($this->Thumbnail->render($testimonial['Testimonial']['cover'], array(
                                'newWidth' => 210,
                                'newHeight' => 200,
                                'quality' => 100,
                                'resizeOption' => 'landscape')
                            ), array(
                        'class' => 'featured-list')
                    );
                    ?>
                    <?php echo $testimonial['Testimonial']['content']; ?>
                </div>
                <!-- End Testimonial Entry -->
                <!-- read more-->
            </div>
            <div class="main ornament" style="margin-top:-15px; float: left;"></div>
        </div>
        <!-- End Testimonial Item -->  
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