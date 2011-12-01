<div class="main-content">
    <div class="post-entry">
        <a href="#" class="heading"><h1><?php echo $page['Page']['title'] ?></h1></a>
        <?php echo $page['Page']['alternative_content']; ?>
        <div style="float: left; width: 630px; position: relative;">
            <div class="ornament" style="clear: both; margin: 10px 0 10px 0; float: left;"></div>

            <?php echo $page['Page']['content']; ?>
        </div>
        <div class="ornament" style="clear: both; margin: 10px 0 10px 0; float: left;"></div>
        <?php
        echo $this->GoogleMapV3->map(array(
            'width' => 610,
            'height' => 300,
            'latitude' => $dataContact['Contact']['latitude'],
            'longitude' => $dataContact['Contact']['longitude'],
            'zoom' => 16,
            'localize' => false,
            'type' => 'ROADMAP'));

        echo $this->GoogleMapV3->addMarker(array(
            'latitude' => $dataContact['Contact']['latitude'],
            'longitude' => $dataContact['Contact']['longitude'],
            'markerIcon' => 'http://google-maps-icons.googlecode.com/files/home.png',
            'shadowIcon' => 'http://google-maps-icons.googlecode.com/files/home.png',
            'windowText' => 'Projeto Vida Nova'
        ));
        ?>
    </div>
</div>