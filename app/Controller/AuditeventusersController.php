<?php
App::uses('AppController', 'Controller');
/**
 * Auditeventusers Controller
 *
 * @property Auditeventuser $Auditeventuser
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class AuditeventusersController extends AppController {

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
		$this->Auditeventuser->recursive = 0;
		$this->set('auditeventusers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Auditeventuser->exists($id)) {
			throw new NotFoundException(__('Invalid auditeventuser'));
		}
		$options = array('conditions' => array('Auditeventuser.' . $this->Auditeventuser->primaryKey => $id));
		$this->set('auditeventuser', $this->Auditeventuser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function register($event, $user) {
            $this->autoRender = false;
            $this->Auditeventuser->create();
            $data = array(
                'id_event' => $event, 
                'user_event' => $user, 
                'date_event' => date("Y/m/d H:i:s"));
            $this->Auditeventuser->save($data);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Auditeventuser->exists($id)) {
			throw new NotFoundException(__('Invalid auditeventuser'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Auditeventuser->save($this->request->data)) {
				$this->Flash->success(__('The auditeventuser has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The auditeventuser could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Auditeventuser.' . $this->Auditeventuser->primaryKey => $id));
			$this->request->data = $this->Auditeventuser->find('first', $options);
		}
		$auditevents = $this->Auditeventuser->Auditevent->find('list');
		$users = $this->Auditeventuser->User->find('list');
		$this->set(compact('auditevents', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Auditeventuser->id = $id;
		if (!$this->Auditeventuser->exists()) {
			throw new NotFoundException(__('Invalid auditeventuser'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Auditeventuser->delete()) {
			$this->Flash->success(__('The auditeventuser has been deleted.'));
		} else {
			$this->Flash->error(__('The auditeventuser could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
