<?php

/**
 * Contacts Controller
 *
 * @property Contact $Contact
 */
class ContactsController extends TrustAppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Contact->id = 1;
        if (!$this->Contact->exists()) {
            $this->request->data['Contact']['id'] = 1;
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Contact->save($this->request->data)) {
                $this->Session->setFlash(__('The contact has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The contact could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Contact->read(null, 1);
        }
    }

}
