<?php
/**
 * Verses Controller
 *
 * @property Verse $Verse
 */
class VersesController extends TrustAppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Verse->recursive = 0;
		$this->set('verses', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Verse->id = $id;
		if (!$this->Verse->exists()) {
			throw new NotFoundException(__('Invalid verse'));
		}
		$this->set('verse', $this->Verse->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Verse->create();
			if ($this->Verse->save($this->request->data)) {
				$this->Session->setFlash(__('The verse has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The verse could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Verse->id = $id;
		if (!$this->Verse->exists()) {
			throw new NotFoundException(__('Invalid verse'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Verse->save($this->request->data)) {
				$this->Session->setFlash(__('The verse has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The verse could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Verse->read(null, $id);
		}
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
		$this->Verse->id = $id;
		if (!$this->Verse->exists()) {
			throw new NotFoundException(__('Invalid verse'));
		}
		if ($this->Verse->delete()) {
			$this->Session->setFlash(__('Verse deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Verse was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
