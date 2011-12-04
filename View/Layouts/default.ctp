<!DOCTYPE html>
<html lang="en-US">
    <head>
        <!--HEAD start-->
        <?php echo $this->Html->charset('UTF-8') . "\n"; ?>
        <?php echo $this->Html->meta(null, null, array('name' => 'author', 'content' => 'Kiwi Studio')) . "\n"; ?>
        <?php echo $this->Html->meta(null, null, array('name' => 'description', 'content' => 'Projeto Vida Nova - Descrição do site aqui')) . "\n"; ?>
        <?php echo $this->Html->meta('keywords', null, array('content' => 'projeto, vida, nova')) . "\n"; ?>
        <!--Stylesheets-->
        <?php echo $this->Html->css(array('reset.css', 'style.css', 'chosen/chosen.css')); ?>
        <!-- CSS for specific color variation -->
        <?php echo $this->Html->css(array('custom/pattern/pattern.css', 'custom/color/dark-green.css')); ?>
        <!--Google Fonts-->    
        <?php echo $this->Html->css('http://fonts.googleapis.com/css?family=Maiden+Orange|News+Cycle|Open+Sans|Lobster|Droid+Sans|Pacifico') . "\n"; ?>
        <!-- AnythingSlider -->
        <?php echo $this->Html->css(array('anythingslider.css', 'anythingslider-theme-minimalist-round.css')); ?>
        <?php echo $this->Html->tag('title', $title_for_layout) . "\n"; ?>
        <!--HEAD end-->
    <body onLoad="initialize()">
        <!--Start Main Wrapper-->
        <div class="main-wrapper">
            <!--Start Header-->
            <div class="header">
                <!--Start Socialize-wrapper-->
                <!--Start Socialize-content-->
                <div class="socialize-content">
                    <ul>
                        <li title="Google+">
                            <?php echo $this->Html->image('buzz-icon.png', array('url' => $dataContact['Contact']['google'])); ?>
                        </li>
                        <li title="Twitter">
                            <?php echo $this->Html->image('twitter-icon.png', array('url' => $dataContact['Contact']['twitter'])); ?>
                        </li>
                        <li title="Facebook">
                            <?php echo $this->Html->image('facebook-icon.png', array('url' => $dataContact['Contact']['facebook'])); ?>
                        </li>
                    </ul>
                </div>
                <!--End Socialize-content-->
                <div class="socialize-wrapper"></div>
                <!--End Socialize-wrapper-->
            </div>
            <!--End Header-->
        </div>
        <!--End Main Wrapper-->
        <!--Start Nav Container-->
        <div class="nav-container">
            <!--Start Nav wrapper-->
            <div id="nav-wrapper">
                <!--Start Logo-->
                <a href="./">
                    <div class="logo">
                        <p>Divino</p>                       
                    </div>
                </a>
                <!--End Logo-->
                <ul class="nav">
                    <li>
                        <?php echo $this->Html->link('Home', array('controller' => 'custom_pages', 'action' => 'index')); ?>                   
                    </li>
                    <li>
                        <?php echo $this->Html->link('Publicacoes', array('controller' => 'posts', 'action' => 'index')); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('Videos', array('controller' => 'videos', 'action' => 'index')); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('Sobre', array('controller' => 'custom_pages', 'action' => 'view', 1)); ?>
                        <ul>
                            <li>
                                <?php echo $this->Html->link('Localizacao', array('controller' => 'custom_pages', 'action' => 'location')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('Nossa Clínica', array('controller' => 'custom_pages', 'action' => 'view', 3)); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('Tratamentos', array('controller' => 'custom_pages', 'action' => 'view', 4)); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('Equipe', array('controller' => 'teams', 'action' => 'index')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('Depoimentos', array('controller' => 'testimonials', 'action' => 'index')); ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <?php echo $this->Html->link('Agenda', array('controller' => 'calendars', 'action' => 'index')); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('Contato', array('controller' => 'contacts', 'action' => 'index')); ?>
                    </li>
                </ul>     
            </div>
            <!--End Nav wrapper-->
        </div>
        <!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="http://code.google.com/apis/gears/gears_init.js"></script>-->
        <!--End Nav container-->
        <!--Start Content Background-->
        <div class="content-background">
            <!--Start Content Wrapper-->
            <div class="content-wrapper">
                <!--Start Main Content-->
                <?php echo $content_for_layout; ?>
                <!--Start Sidebar-->
                <div class="sidebar">
                    <!--Service Times-->
                    <a href="#" class="heading"><h1>Horarios</h1></a>
                    <!--Service info-->
                    <ul class="service">
                        <?php foreach ($serviceTimes as $serviceTime): ?>
                            <li><?php echo $serviceTime['ServiceTime']['content'] ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="sidebar ornament"></div>
                </div>
                <!--End Sidebar-->
                <div class="clear"></div>
            </div>
            <!--End Content Wrapper-->
        </div>
        <!--End Content Background-->
        <!--Start Footer Background-->
        <div class="footer-background">
            <!--Start Footer Wrapper-->
            <div class="footer-wrapper">
                <!--Start Column 1 -->
                <div class="column">
                    <span class="heading"><span class="text">Onde estamos</span></span>

                    <?php
                    echo $this->GoogleMapV3->map(array(
                        'width' => 240,
                        'height' => 240,
                        'latitude' => $dataContact['Contact']['latitude'],
                        'longitude' => $dataContact['Contact']['longitude'],
                        'zoom' => 16,
                        'localize' => false,
                        'type' => 'ROADMAP',
                        'div' => 'map_canvas-footer'));

                    echo $this->GoogleMapV3->addMarker(array(
                        'latitude' => $dataContact['Contact']['latitude'],
                        'longitude' => $dataContact['Contact']['longitude'],
                        'markerIcon' => 'http://google-maps-icons.googlecode.com/files/home.png',
                        'shadowIcon' => 'http://google-maps-icons.googlecode.com/files/home.png',
                        'windowText' => 'Projeto Vida Nova'
                    ));
                    ?>

                </div>
                <!--End Column 1 -->
                <!--Start Column 2 -->
                <div class="column">
                    <span class="heading">
                        <span class="text">
                            Depoimentos
                        </span>
                    </span>
                    <?php foreach ($lastTestimonials as $testimonial): ?>
                        <div class="twitter-item">
                            <div class="twitter-image">
                                <?php echo $this->Html->image('twit-image.png'); ?>
                            </div>
                            <div class="twitter-text">
                                <a href="#"><?php echo $testimonial['Testimonial']['author'] ?>:</a> <?php echo $testimonial['Testimonial']['content']; ?>
                            </div>
                        </div>    
                    <?php endforeach; ?>
                </div>
                <!--End Column 2 -->        
                <!--Start Column 3 -->
                <div class="column-last">
                    <span class="heading"><span class="text">Contate-nos</span></span>
                    <p><?php echo $dataContact['Contact']['alternative_content']; ?>
                        <?php echo $this->Html->link($dataContact['Contact']['email'], array('controller' => 'contacts', 'action' => 'index')); ?>
                    </p>
                    <h3><?php echo $dataContact['Contact']['phone'] ?></h3>
                    <span class="heading">Redes Sociais</span>
                    <ul class="social-contacts">
                        <li>
                            <?php echo $this->Html->image('rss-icon.png', array('url' => '#', 'title' => 'rss')); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->image('mail-icon.png', array('url' => $dataContact['Contact']['email'], 'title' => 'mail')); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->image('phone-icon.png', array('url' => $dataContact['Contact']['phone'], 'title' => 'phone')); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->image('facebook-icon.png', array('url' => $dataContact['Contact']['facebook'], 'title' => 'Curta no facebook')); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->image('twitter-icon.png', array('url' => $dataContact['Contact']['twitter'], 'title' => 'Siga no twitter')); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->image('buzz-icon.png', array('url' => $dataContact['Contact']['google'], 'title' => 'buzz')); ?>
                        </li>
                    </ul>
                </div>
                <!--End Column 3 -->
                <div class="clear"></div>
            </div>
            <!--End Footer Wrapper-->
        </div>
        <div class="footer-credits">Copyright © 2011 Divino - KiwiStudio. All rights reserved.</div>
        <!--End Footer Background-->
        <?php echo $this->Html->script('jquery-1.4.2.min.js'); ?>
        <?php echo $this->Html->script('s3Slider.js') . "\n"; ?>
        <?php echo $this->Html->script('jquery.tipsy.js') . "\n"; ?>
        <?php echo $this->Html->script('jquery.easing.1.2.js') . "\n"; ?>
        <?php echo $this->Html->script('jquery.anythingslider.js') . "\n"; ?>
        <?php echo $this->Html->script('jquery.anythingslider.video.js') . "\n"; ?>
        <?php echo $this->Html->script('custom.js'); ?>
        <script>
            $(function(){
                $('#quote-rotator').anythingSlider({
                    // If true, builds a list of anchor links to link to each panel
                    buildNavigation     : false,
                    navigationSize      : false,
                    buildStartStop      : false,
                    buildArrows         : false,
                    autoPlay			: true,
                    delay               : 5000,      // How long between slideshow transitions in AutoPlay mode (in milliseconds)
                    animationTime       : 1600,       // How long the slideshow transition takes (in milliseconds)
                    easing				: 'easeInOutQuad'
                });
                
                $('#anythingslider').anythingSlider({
                    // If true, builds a list of anchor links to link to each panel
                    buildNavigation     : true,
                    navigationSize      : false,
                    buildStartStop      : false,
                    buildArrows         : false
                });
        
                // set up external links
                $('ul.external-nav li a').click(function(){
                    var slide = $(this).attr('href').substring(1);
                    $('#anythingslider').anythingSlider(slide);
                    return false;
                });
            });
        </script>

        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script type="text/javascript">
            $(document).ready(function() {
                $('.column-last ul.social-contacts li a img').tipsy({fade: true, gravity: 'n'});
                $('.sidebar ul.contact li').tipsy({fade:true, gravity: 'w'});
                $('.socialize-content ul li').tipsy({fade:true, gravity: 'n'});	
                $('#s3slider').s3Slider({ 
                    timeOut: 3000});
                $("#quotes").quotator({
                    speed : 5000,
                    json : "js/quotator_quotes.js"
                });
                $('.team a img').tipsy({fade:true, gravity: 'n'});      
            });
        </script>
        <?php echo $this->Html->script('chosen.jquery.js') . "\n"; ?>
        <script type="text/javascript"> $(".chzn-select").chosen(); </script>
        <?php echo $this->element('sql_dump'); ?>
    </body>
    <!--BODY end-->
</html>
