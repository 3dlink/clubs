<?php
App::uses('AppController', 'Controller');
/**
 * Contents Controller
 *
 * @property Logo $Logo
 * @property PaginatorComponent $Paginator
 */
class ContentsController extends AppController {

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
		$this->set('content', $this->Paginator->paginate());
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
		if (!$this->Content->exists($id)) {
			throw new NotFoundException(__('Invalid Content'));
		}
		if ($this->request->is(array('post', 'put'))) {
      // die;
			if ($this->Content->save($this->request->data)) {
				$this->Session->setFlash(__('The logo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The content could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Content.' . $this->Content->primaryKey => $id));
			$this->request->data = $this->Content->find('first', $options);
		}
	}
}
