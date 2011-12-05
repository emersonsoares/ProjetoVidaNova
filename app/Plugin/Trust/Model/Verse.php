<?php

/**
 * Verse Model
 *
 */
class Verse extends TrustAppModel {

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
