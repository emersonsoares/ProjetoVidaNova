<?php
/**
 * ServiceTimes Controller
 *
 * @property ServiceTime $ServiceTime
 */
class ServiceTimesController extends TrustAppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ServiceTime->recursive = 0;
		$this->set('serviceTimes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ServiceTime->id = $id;
		if (!$this->ServiceTime->exists()) {
			throw new NotFoundException(__('Invalid service time'));
		}
		$this->set('serviceTime', $this->ServiceTime->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ServiceTime->create();
			if ($this->ServiceTime->save($this->request->data)) {
				$this->Session->setFlash(__('The service time has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The service time could not be saved. Please, try again.'));
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
		$this->ServiceTime->id = $id;
		if (!$this->ServiceTime->exists()) {
			throw new NotFoundException(__('Invalid service time'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ServiceTime->save($this->request->data)) {
				$this->Session->setFlash(__('The service time has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The service time could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ServiceTime->read(null, $id);
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
		$this->ServiceTime->id = $id;
		if (!$this->ServiceTime->exists()) {
			throw new NotFoundException(__('Invalid service time'));
		}
		if ($this->ServiceTime->delete()) {
			$this->Session->setFlash(__('Service time deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Service time was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
