<?php
App::uses('AppController', 'Controller');
/**
 * Logos Controller
 *
 * @property Logo $Logo
 * @property PaginatorComponent $Paginator
 */
class LogosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout="admin";
		$this->Logo->recursive = 0;
		$this->set('logos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout="admin";
		if (!$this->Logo->exists($id)) {
			throw new NotFoundException(__('Invalid logo'));
		}
		$options = array('conditions' => array('Logo.' . $this->Logo->primaryKey => $id));
		$this->set('logo', $this->Logo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		if ($this->request->is('post')) {
			$this->Logo->create();
			if ($this->Logo->save($this->request->data)) {
				$this->Session->setFlash(__('The logo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The logo could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->layout="admin";
		if (!$this->Logo->exists($id)) {
			throw new NotFoundException(__('Invalid logo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Logo->save($this->request->data)) {
				$this->Session->setFlash(__('The logo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The logo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Logo.' . $this->Logo->primaryKey => $id));
			$this->request->data = $this->Logo->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Logo->id = $id;
		if (!$this->Logo->exists()) {
			throw new NotFoundException(__('Invalid logo'));
		}
		if ($this->Logo->delete()) {
			$this->Session->setFlash(__('The logo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The logo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
