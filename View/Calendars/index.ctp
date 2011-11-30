<div class="main-content">
    <!-- AnythingSlider -->
    <ul id="anythingslider" style="height: 500px;">
        <?php foreach ($dataCalendar as $months) { ?>
            <li>
                <a href="#1" class="heading"><h1><?php echo $this->Time->format('M', $months[0]['Calendar']['date']); ?></h1></a>
                <?php
                foreach ($months as $data) {
                    ?>
                    <!--Start Calendar Entry-->
                    <div class="calendar-single-entry">
                        <div class="date">
                            <p class="day"><?php echo $this->Time->format('d', $data['Calendar']['date']);?></p>
                            <p class="dayname"><?php echo $this->Time->format('D', $data['Calendar']['date']);?></p>
                        </div>
                        <div class="description">
                            <?php echo $data['Calendar']['title']; ?>
                            <p>
                                <span class="location"><?php echo $data['Calendar']['location']; ?></span>
                                <span class="time"><?php echo $this->Time->format('H:m', $data['Calendar']['time']); ?></span>
                            </p>
                        </div>
                    </div>
                    <!--End Calendar Entry-->
                <?php } ?>
            </li>
        <?php } ?>
    </ul>
    <!-- END AnythingSlider -->
</div>
<!--End Main Content-->