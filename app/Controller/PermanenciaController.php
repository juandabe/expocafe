<?php
App::uses('AppController', 'Controller');
App::uses('PermissionsController', 'Controller');
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
                $PermissionsController = new PermissionsController;
                $isPermision = $PermissionsController->checkPermission(1, 1);
                if(!$isPermision) {
                   return $this->redirect(array('controller' => 'pages', 'action' => 'home')); 
                }
		$this->set('permanencia',$this->Permanencium->find('all', array(
                'conditions' => array('id_exportador' => '059'))),$this->Paginator->paginate());
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
        
}