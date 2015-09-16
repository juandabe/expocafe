<?php
App::uses('AppController', 'Controller');
/**
 * Bills Controller
 *
 * @property Bill $Bill
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class BillsController extends AppController {

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
		$this->Bill->recursive = 0;
		$this->set('bills', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bill->exists($id)) {
			throw new NotFoundException(__('Invalid bill'));
		}
		$options = array('conditions' => array('Bill.' . $this->Bill->primaryKey => $id));
		$this->set('bill', $this->Bill->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function makebill($user) {
             $lastBill = $this->Bill->find('first', array(
                'fields' => array('MAX(id) as id'),
                'condictions' => array('Bill.client' => $user)));
             if($lastBill) {
                 return $lastBill;
             }
             else {
                $data['Bill']['client']=$user;
                $data['Bill']['date']=date("Y/m/d H:i:s");
                $data['Bill']['total_bill']=0;
                $this->Bill->create();
                $this->Bill->save($data);
                return $this->Bill;
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
		if (!$this->Bill->exists($id)) {
			throw new NotFoundException(__('Invalid bill'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bill->save($this->request->data)) {
				$this->Flash->success(__('The bill has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The bill could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bill.' . $this->Bill->primaryKey => $id));
			$this->request->data = $this->Bill->find('first', $options);
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
		$this->Bill->id = $id;
		if (!$this->Bill->exists()) {
			throw new NotFoundException(__('Invalid bill'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bill->delete()) {
			$this->Flash->success(__('The bill has been deleted.'));
		} else {
			$this->Flash->error(__('The bill could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
