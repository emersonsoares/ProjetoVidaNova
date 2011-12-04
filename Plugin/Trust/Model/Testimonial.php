<?php

/**
 * Testimonial Model
 *
 */
class Testimonial extends TrustAppModel {

    public $actsAs = array(
        'MeioUpload.MeioUpload' => array(
            'cover' => array(
                'dir' => 'img{DS}uploads{DS}images',
                'create_directory' => true,
                'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
                'allowed_ext' => array('.jpg', '.jpeg', '.png'),
                'default' => 'default.jpg',
                'thumbnails' => false
            )
        )
    );

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'author' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

}
