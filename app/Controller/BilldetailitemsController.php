<?php
App::uses('AppController', 'Controller');
/**
 * Billdetailitems Controller
 *
 * @property Billdetailitem $Billdetailitem
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class BilldetailitemsController extends AppController {

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
		$this->Billdetailitem->recursive = 0;
		$this->set('billdetailitems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Billdetailitem->exists($id)) {
			throw new NotFoundException(__('Invalid billdetailitem'));
		}
		$options = array('conditions' => array('Billdetailitem.' . $this->Billdetailitem->primaryKey => $id));
		$this->set('billdetailitem', $this->Billdetailitem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Billdetailitem->create();
			if ($this->Billdetailitem->save($this->request->data)) {
				$this->Flash->success(__('The billdetailitem has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The billdetailitem could not be saved. Please, try again.'));
			}
		}
		$bills = $this->Billdetailitem->Bill->find('list');
		$items = $this->Billdetailitem->Item->find('list');
		$this->set(compact('bills', 'items'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Billdetailitem->exists($id)) {
			throw new NotFoundException(__('Invalid billdetailitem'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Billdetailitem->save($this->request->data)) {
				$this->Flash->success(__('The billdetailitem has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The billdetailitem could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Billdetailitem.' . $this->Billdetailitem->primaryKey => $id));
			$this->request->data = $this->Billdetailitem->find('first', $options);
		}
		$bills = $this->Billdetailitem->Bill->find('list');
		$items = $this->Billdetailitem->Item->find('list');
		$this->set(compact('bills', 'items'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Billdetailitem->id = $id;
		if (!$this->Billdetailitem->exists()) {
			throw new NotFoundException(__('Invalid billdetailitem'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Billdetailitem->delete()) {
			$this->Flash->success(__('The billdetailitem has been deleted.'));
		} else {
			$this->Flash->error(__('The billdetailitem could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
