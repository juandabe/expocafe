<?php
App::uses('AppController', 'Controller');
/**
 * Permissions Controller
 *
 * @property Permission $Permission
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PermissionsController extends AppController {

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
		$this->Permission->recursive = 0;
		$this->set('permissions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function checkPermission($client, $item) {
                $currentDate=date("Y/m/d H:i:s");
                $resul = $this->Permission->find('first', array(
                'conditions' => array('Permission.client' => $client,
                    'Permission.date_end >' => $currentDate,
                    'Permission.id_item' => $item)
                ));
		if($resul)
                        return true;
                return false;
	}

/**
 * add method
 *
 * @return void
 */
	function registerPermission($client,$item) {
                $this->autoRender = false;
                $currentDate=date("Y/m/d H:i:s");
                $startDate=strtotime($currentDate);
                $endDate=date( 'Y-m-d H:i:s', $startDate+(60*1) );
                $data = array(
                'client' => $client, 
                'id_item' => $item, 
                'date_start' => $currentDate,
                'date_end' => $endDate);
                $this->Permission->create();
                $this->Permission->save($data);
	}
        
        public function queryPermanencia($client) {
                $this->autoRender = false;
                $check=$this->checkPermission($client, 1);
                if(!$check) {
                    $this->registerPermission($client, 1);
                }
                return $this->redirect(array('controller' => 'permanencia', 'action' => 'index'));
	}
        
        public function queryPesosDescargue($client) {
                $this->autoRender = false;
                $check=$this->checkPermission($client, 2);
                if(!$check) {
                    $this->registerPermission($client, 2);
                }
                return $this->redirect(array('controller' => 'pesosdescargues', 'action' => 'index'));
	}
        
        public function queryEmbalaje($client,$item) {
                $this->autoRender = false;
                $check=$this->checkPermission($client, 3);
                if(!$check) {
                    $this->registerPermission($client, 3);
                }
                return $this->redirect(array('controller' => 'permanencia', 'action' => 'index'));
	}
        


}