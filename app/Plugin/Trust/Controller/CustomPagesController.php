<?php

/**
 * CustomPages Controller
 *
 * @property CustomPage $CustomPage
 */
class CustomPagesController extends TrustAppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->CustomPage->recursive = 0;
        $this->set('customPages', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->CustomPage->id = $id;
        if (!$this->CustomPage->exists()) {
            throw new NotFoundException(__('Invalid custom page'));
        }
        $this->set('customPage', $this->CustomPage->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->request->data['CustomPage']['user_id'] = $this->Auth->user('id');
            $this->CustomPage->create();
            if ($this->CustomPage->save($this->request->data)) {
                $this->Session->setFlash(__('The custom page has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The custom page could not be saved. Please, try again.'));
            }
        }
        $users = $this->CustomPage->User->find('list');
        $this->set(compact('users'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->CustomPage->id = $id;
        if (!$this->CustomPage->exists()) {
            throw new NotFoundException(__('Invalid custom page'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->CustomPage->save($this->request->data)) {
                $this->Session->setFlash(__('The custom page has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The custom page could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->CustomPage->read(null, $id);
        }
        $users = $this->CustomPage->User->find('list');
        $this->set(compact('users'));
    }

    /**
     * delete method
     *
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->CustomPage->id = $id;
        if (!$this->CustomPage->exists()) {
            throw new NotFoundException(__('Invalid custom page'));
        }
        if ($this->CustomPage->delete()) {
            $this->Session->setFlash(__('Custom Page deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Custom Page was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
