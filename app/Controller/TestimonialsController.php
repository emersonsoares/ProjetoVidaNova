<?php

/**
 * Description of Testimonials
 *
 * @author emersonsoares
 */
class TestimonialsController extends AppController {

    public function index() {
        $this->paginate = array(
            'limit' => 5,
            'order' => array('Testimonial.id' => 'DESC')
        );
        $this->set('testimonials', $this->paginate('Testimonial'));
        $this->set('title_for_layout', 'Projeto Vida Nova | Testimonial');
    }

}

?>
