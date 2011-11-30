<?php
/* SVN FILE: $Id: thumbs_controller.php 40 2008-07-26 03:52:51Z diovani $ */
/**
 * The ThumbsController by Spout.
 * Downloaded from  http://bakery.cakephp.org/articles/view/thumbnails-generation-with-phpthumb
 * Modified to work with cakePHP 1.2 and allow most of phpThumb original options
 *
 */
class ThumbsController extends AppController
{
    var $name = 'Thumbs';
    var $uses = null;
    var $layout = null;
    var $autoRender = false;

    var $allowedGETparameters = array('src', 'w', 'h', 'wp', 'hp', 'wl', 'hl', 'ws', 'hs', 'f', 'q', 'sx', 'sy', 'sw', 'sh', 'zc', 'bc', 'bg', 'bgt', 'fltr', 'xto', 'ra', 'ar', 'aoe', 'far', 'iar', 'maxb', 'down', 'phpThumbDebug', 'hash', 'md5s', 'sfn', 'dpi', 'sia', 'nocache');

    function view() {
            if(empty($_GET['src'])){
                die("No source image");
            }

            $sourceFilename = TMP . 'photos' . DS . $_GET['src'];

            if(is_readable($sourceFilename)){
                App::import('Vendor', 'phpThumb', array('file' => 'phpThumb' . DS . 'phpthumb.class.php'));
                $phpThumb = new phpThumb();

                $phpThumb->setSourceFilename($sourceFilename);
                $phpThumb->config_imagemagick_path = '/usr/bin/convert';
                $phpThumb->config_prefer_imagemagick = true;
                $phpThumb->config_output_format = 'jpeg';
                $phpThumb->config_error_die_on_error = true;
                $phpThumb->config_document_root = WWW_ROOT;
                $phpThumb->config_temp_directory = TMP;
                $phpThumb->config_cache_directory = CACHE.'thumbs'.DS;
                $phpThumb->config_cache_disable_warning = true;
                $phpThumb->config_allow_src_above_docroot = true;

                //Defines the default jpeg quality as 90
                if (!isset($_GET['q'])) {
                    $phpThumb->q = '90';
                }

                foreach ($_GET as $key => $value) {
                    if (in_array($key, $this->allowedGETparameters)) {
                        if ($key == 'src') {
                            //already read
                            continue;
                        } else {
                            $phpThumb->setParameter($key, $value);
                        }
                    }
                }

                $cacheFilename = md5($_SERVER['REQUEST_URI']);

                $phpThumb->cache_filename = $phpThumb->config_cache_directory.$cacheFilename;

                //Thanks to Kim Biesbjerg for his fix about cached thumbnails being regeneratd
                if(!is_file($phpThumb->cache_filename)){ // Check if image is already cached.
                    if ($phpThumb->GenerateThumbnail()) {
                        $phpThumb->RenderToFile($phpThumb->cache_filename);
                    } else {
                        //pr($phpThumb->debugmessages);
                        die('Failed: '.$phpThumb->fatalerror);
                    }
                }

                if(is_file($phpThumb->cache_filename)){ // If thumb was already generated we want to use cached version
                    $cachedImage = getimagesize($phpThumb->cache_filename);
                    header('Content-Type: '.$cachedImage['mime']);
                    readfile($phpThumb->cache_filename);
                    exit;
                }

            } else { // Can't read source
                die("Couldn't read source image ".$sourceFilename);
            }
        }
}
?>
