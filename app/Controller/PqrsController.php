<?php
App::uses('AppController', 'Controller');
App::uses('AuditeventusersController', 'Controller');
/**
 * Pqrs Controller
 *
 * @property Pqr $Pqr
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PqrsController extends AppController {

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
		$this->Pqr->recursive = 0;
		$this->set('pqrs', $this->Paginator->paginate());
	}
        
        public function mypqrs() {
                $AuditeventusersController = new AuditeventusersController;
                $AuditeventusersController->register(4, 1);
		$this->set('pqrs', $this->Pqr->find('all',array(
                            'conditions' => array('Pqr.id_client' => 2)
                        )),
                        $this->Paginator->paginate());
	}
        
        public function viewmypqr($id = null) {
		if (!$this->Pqr->exists($id)) {
			throw new NotFoundException(__('Invalid pqr'));
		}
                $AuditeventusersController = new AuditeventusersController;
                $AuditeventusersController->register(6, 1);
		$options = array('conditions' => array('Pqr.' . $this->Pqr->primaryKey => $id));
		$this->set('pqr', $this->Pqr->find('first', $options));
	}
        

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pqr->exists($id)) {
			throw new NotFoundException(__('Invalid pqr'));
		}
		$options = array('conditions' => array('Pqr.' . $this->Pqr->primaryKey => $id));
		$this->set('pqr', $this->Pqr->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pqr->create();
                        $unixTime = time();
                        $locatedCode = substr(MD5(microtime()),0,10);
                        $this->Pqr->set('id_client',2);
                        $this->Pqr->set('id_located',$locatedCode);
                        $this->Pqr->set('state',1);
                        $this->Pqr->set('date_create',date("Y/m/d h:i:sa", $unixTime));
			if ($this->Pqr->save($this->request->data)) {
                            $AuditeventusersController = new AuditeventusersController;
                            $AuditeventusersController->register(5, 1);
				$this->Flash->success(__('Registro PQR exitoso!'));
				return $this->redirect(array('action' => 'mypqrs'));
			} else {
				$this->Flash->error(__('The pqr could not be saved. Please, try again.'));
			}
		}
		$users = $this->Pqr->User->find('list');
                $types = $this->Pqr->Typepqr->find('list');
                $this->set('types', $types);
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function reply($id = null) {
		if (!$this->Pqr->exists($id)) {
			throw new NotFoundException(__('Invalid pqr'));
		}
		if ($this->request->is(array('post', 'put'))) {
                        $oldpqr=$this->Pqr->findById($id);
                        $oldpqr['Pqr']['state']=$this->request->data['Pqr']['state'];
                        $oldpqr['Pqr']['reply']=$this->request->data['Pqr']['reply'];
                        debug($oldpqr);
			if ($this->Pqr->save($oldpqr)) {
				$this->Flash->success(__('PQR han sido contestada!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The pqr could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pqr.' . $this->Pqr->primaryKey => $id));
			$this->request->data = $this->Pqr->find('first', $options);
		}
		$users = $this->Pqr->User->find('list');
                $states = $this->Pqr->Statepqr->find('list');
                $this->set('states', $states);
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pqr->id = $id;
		if (!$this->Pqr->exists()) {
			throw new NotFoundException(__('Invalid pqr'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pqr->delete()) {
                    $AuditeventusersController = new AuditeventusersController;
                    $AuditeventusersController->register(7, 1);
			$this->Flash->success(__('The pqr has been deleted.'));
		} else {
			$this->Flash->error(__('The pqr could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'mypqrs'));
	}
}
