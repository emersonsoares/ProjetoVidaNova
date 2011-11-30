<?php
/* SVNFILE: $Id: php_thumb.php 59 2008-09-07 21:59:31Z diovani $ */

/**
 * phpThumb helper
 * Help to create dinamic thumbnailed images using phpThumb
 * http://phpthumb.sourceforge.net
 */
class PhpThumbHelper extends Helper
{
    var $helpers = array('Html');
    //the path to phpThumb.php file or controller, relative to WEB_ROOT
    var $phpThumb = '/thumbs/view';

    /**
     * Render the thumbnail image
     *
     * @param string $path
     * @param array $phpThumbAttributes
     * @param array $htmlAttributes
     * @param boolean $useAltSyntax
     * @return string
     */
    function image($path, $phpThumbAttributes = array(), $htmlAttributes = array(), $useAltSyntax = false) {
        $thumb_attr = NULL;
        $w = NULL;
        $h = NULL;

        foreach ($phpThumbAttributes as $attr => $value) {
            if ($useAltSyntax) {
                if ($attr == 'w' || $attr == 'h') {
                    $res = $attr;
                    $$res = $value;
                } else {
                    $thumb_attr .= $attr.'='.$value.';';
                }
            } else {
                $thumb_attr .= '&'.$attr.'='.$value;
            }
        }

        if ($useAltSyntax) {
            $thumb_path = $this->phpThumb.'/'.$thumb_attr.$w.'x'.$h.';'.$path;
        } else {
            $thumb_path = $this->phpThumb.'&src='.$path.$thumb_attr;
        }

        return $this->Html->image($thumb_path, $htmlAttributes);
    }
}
?>
