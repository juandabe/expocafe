<?php
App::uses('AppController', 'Controller');
/**
 * Permanencia Controller
 *
 * @property Permanencium $Permanencium
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PermanenciaController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Permanencium->recursive = 0;
		$this->set('permanencia', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Permanencium->exists($id)) {
			throw new NotFoundException(__('Invalid permanencium'));
		}
		$options = array('conditions' => array('Permanencium.' . $this->Permanencium->primaryKey => $id));
		$this->set('permanencium', $this->Permanencium->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Permanencium->create();
			if ($this->Permanencium->save($this->request->data)) {
				$this->Flash->success(__('The permanencium has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The permanencium could not be saved. Please, try again.'));
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
		if (!$this->Permanencium->exists($id)) {
			throw new NotFoundException(__('Invalid permanencium'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Permanencium->save($this->request->data)) {
				$this->Flash->success(__('The permanencium has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The permanencium could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Permanencium.' . $this->Permanencium->primaryKey => $id));
			$this->request->data = $this->Permanencium->find('first', $options);
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
		$this->Permanencium->id = $id;
		if (!$this->Permanencium->exists()) {
			throw new NotFoundException(__('Invalid permanencium'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Permanencium->delete()) {
			$this->Flash->success(__('The permanencium has been deleted.'));
		} else {
			$this->Flash->error(__('The permanencium could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
