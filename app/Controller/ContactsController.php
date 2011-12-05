<?php

/**
 * Contacts Controller
 *
 * @property Contact $Contact
 */
class ContactsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->set('title_for_layout', 'Projeto Vida Nova | Contato');
        $this->set('contact', $this->Contact->read(null, '1'));
    }

}
