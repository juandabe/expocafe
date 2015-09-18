<?php
App::uses('AppController', 'Controller');
App::uses('PermissionsController', 'Controller');
/**
 * Pesosdescargues Controller
 *
 * @property Pesosdescargue $Pesosdescargue
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PesosdescarguesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');
        var $helpers = array('Html', 'Form','Csv'); 

/**
 * index method
 *
 * @return void
 */
	public function index() {
                $PermissionsController = new PermissionsController;
                $isPermision = $PermissionsController->checkPermission(1, 2);
                if(!$isPermision) {
                   return $this->redirect(array('controller' => 'pages', 'action' => 'home')); 
                }
		$this->Pesosdescargue->recursive = 0;
		$this->set('pesosdescargues', $this->Paginator->paginate());
	}

        function download()
        {
            $this->set('pesos', $this->Pesosdescargue->find('all'));
            $this->layout = null;
            $this->autoLayout = false;
            Configure::write('debug', '0');
        }


}
