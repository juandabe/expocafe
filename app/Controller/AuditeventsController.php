<?php
App::uses('AppController', 'Controller');
/**
 * Auditevents Controller
 *
 * @property Auditevent $Auditevent
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class AuditeventsController extends AppController {

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
		$this->Auditevent->recursive = 0;
		$this->set('auditevents', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Auditevent->exists($id)) {
			throw new NotFoundException(__('Invalid auditevent'));
		}
		$options = array('conditions' => array('Auditevent.' . $this->Auditevent->primaryKey => $id));
		$this->set('auditevent', $this->Auditevent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Auditevent->create();
			if ($this->Auditevent->save($this->request->data)) {
				$this->Flash->success(__('The auditevent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The auditevent could not be saved. Please, try again.'));
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
		if (!$this->Auditevent->exists($id)) {
			throw new NotFoundException(__('Invalid auditevent'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Auditevent->save($this->request->data)) {
				$this->Flash->success(__('The auditevent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The auditevent could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Auditevent.' . $this->Auditevent->primaryKey => $id));
			$this->request->data = $this->Auditevent->find('first', $options);
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
		$this->Auditevent->id = $id;
		if (!$this->Auditevent->exists()) {
			throw new NotFoundException(__('Invalid auditevent'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Auditevent->delete()) {
			$this->Flash->success(__('The auditevent has been deleted.'));
		} else {
			$this->Flash->error(__('The auditevent could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
