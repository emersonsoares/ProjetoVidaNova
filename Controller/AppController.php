<?php

class AppController extends Controller {

    public $uses = array('Testimonial', 'Contact', 'ServiceTime');
    public $helpers = array('Html', 'Form', 'Session', 'Thumbnail', 'Time', 'Paginator');

    //public $components = array('DebugKit.Toolbar');

    function beforeFilter() {
        $this->set('dataContact', $this->Contact->find('first'));
        $this->set('lastTestimonials', $this->Testimonial->find('all', array(
                    'limit' => 4,
                    'order' => 'Testimonial.id DESC'
                        )
                )
        );
        $this->set('serviceTimes', $this->ServiceTime->find('all'));
    }

}

?>
