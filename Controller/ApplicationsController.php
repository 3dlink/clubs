<?php
App::uses('AppController', 'Controller');
/**
 * Applications Controller
 *
 * @property Application $Application
 * @property PaginatorComponent $Paginator
 */
class ApplicationsController extends AppController {

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
		$this->Application->recursive = 0;
		$this->set('applications', $this->Paginator->paginate());
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
		if (!$this->Application->exists($id)) {
			throw new NotFoundException(__('Invalid application'));
		}
		$options = array('conditions' => array('Application.' . $this->Application->primaryKey => $id));
		$this->set('application', $this->Application->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Application->create();
			if ($this->Application->save($this->request->data)) {
				$id = $this->Application->getLastInsertId();
				return $this->redirect('/confirmation/'.$id);
			} else {
				$this->Session->setFlash(__('The application could not be saved. Please, try again.'));
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
		if (!$this->Application->exists($id)) {
			throw new NotFoundException(__('Invalid application'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Application->save($this->request->data)) {
				$this->Session->setFlash(__('The application has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The application could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Application.' . $this->Application->primaryKey => $id));
			$this->request->data = $this->Application->find('first', $options);
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
		$this->Application->id = $id;
		if (!$this->Application->exists()) {
			throw new NotFoundException(__('Invalid application'));
		}
		if ($this->Application->delete()) {
			$this->Session->setFlash(__('The application has been deleted.'));
		} else {
			$this->Session->setFlash(__('The application could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function addlogo($id = null){
		$this->autoRender = false;
		$this->Application->id = $id;
		if (!$this->Application->exists()) {
			throw new NotFoundException(__('Invalid application'));
		}

		$this->Application->id = $id;
		$this->Application->saveField('active', 1);
		return $this->redirect(array('action' => 'index'));

	}


	public function removelogo($id = null){
		$this->autoRender = false;
		$this->Application->id = $id;
		if (!$this->Application->exists()) {
			throw new NotFoundException(__('Invalid application'));
		}

		$this->Application->id = $id;
		$this->Application->saveField('active', 0);		
		return $this->redirect(array('action' => 'index'));

	}

}
