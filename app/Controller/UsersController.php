<?php
App::uses('AppController', 'Controller');
App::uses('AuditeventusersController', 'Controller');
App::uses('BillsController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

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
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}
        
        function buildAcl() {
            $log = array();

            $aco =& $this->Acl->Aco;
            $root = $aco->node('controllers');
            if (!$root) {
                $aco->create(array('parent_id' => null, 'model' => null, 'alias' => 'controllers'));
                $root = $aco->save();
                $root['Aco']['id'] = $aco->id;
                $log[] = 'Creado el nodo Aco para los controladores';
            } else {
                $root = $root[0];
            }

            App::import('Core', 'File');
            $Controllers = App::objects('Controller');
            $appIndex = array_search('App', $Controllers);
            if ($appIndex !== false ) {
                unset($Controllers[$appIndex]);
            }
            $baseMethods = get_class_methods('controller');
            $baseMethods[] = 'buildAcl';

            // miramos en cada controlador en app/controllers
            foreach ($Controllers as $ctrlName) {
                App::uses($ctrlName, 'Controller');
                $ctrlclass = $ctrlName;
                $methods = get_class_methods($ctrlclass);

                //buscar / crear nodo de controlador
                $controllerNode = $aco->node('controllers/'.$ctrlName);
                if (!$controllerNode) {
                    $aco->create(array('parent_id' => $root['Aco']['id'], 'model' => null, 'alias' => $ctrlName));
                    $controllerNode = $aco->save();
                    $controllerNode['Aco']['id'] = $aco->id;
                    $log[] = 'Creado el nodo Aco del controlador '.$ctrlName;
                } else {
                    $controllerNode = $controllerNode[0];
                }

                //Limpieza de los metodos, para eliminar aquellos en el controlador
                //y en las acciones privadas
                foreach ($methods as $k => $method) {
                    if (strpos($method, '_', 0) === 0) {
                        unset($methods[$k]);
                        continue;
                    }
                    if (in_array($method, $baseMethods)) {
                        unset($methods[$k]);
                        continue;
                    }
                    $methodNode = $aco->node('controllers/'.$ctrlName.'/'.$method);
                    if (!$methodNode) {
                        $aco->create(array('parent_id' => $controllerNode['Aco']['id'], 'model' => null, 'alias' => $method));
                        $methodNode = $aco->save();
                        $log[] = 'Creado el nodo Aco para '. $method;
                    }
                }
            }
            debug($log);
            exit();
        }
        
        function initDB() {
            $group = $this->User->Rol;
            //Permite a los administradores hacer todo
            $group->id = 3;
            $this->Acl->allow($group, 'controllers');

            //permite a los editores postear y accesar los widgets
            $group->id = 2;
            $this->Acl->deny($group, 'controllers');
            $this->Acl->allow($group, 'controllers/Users');
            $this->Acl->allow($group, 'controllers/Rols');
            $this->Acl->allow($group, 'controllers/Pqrs');
            $this->Acl->allow($group, 'controllers/Billdetailitems');
            $this->Acl->allow($group, 'controllers/Bills');
            $this->Acl->allow($group, 'controllers/Clientdocuments');
            $this->Acl->allow($group, 'controllers/Documents');
            $this->Acl->allow($group, 'controllers/Items');

            //permite a los usuarios añadir y editar posts y widgets
            $group->id = 1;
            $this->Acl->deny($group, 'controllers');
            $this->Acl->allow($group, 'controllers/Clientdocuments');
            $this->Acl->allow($group, 'controllers/Pqrs');
            $this->Acl->allow($group, 'controllers/Bills');
            
            exit();
        }
        
        public function beforeFilter() {
            parent::beforeFilter();
            // Allow users to register and logout.
            $this->Auth->allow('add', 'logout');
        }

        public function login() {
            if ($this->request->is('post')) {
                if ($this->Auth->login($this->request->data)) {
                    return $this->redirect($this->Auth->redirectUrl());
                }
                $this->Flash->error(__('Datos de acceso no validos, intente nuevamente'));
            }
        }

        public function logout() {
            return $this->redirect($this->Auth->logout());
        }

	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
                
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}
        
        public function viewperuser($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}

                $AuditeventusersController = new AuditeventusersController;
                $AuditeventusersController->register(11, $id);
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
//                $BillsController = new BillsController;
//                $currentBill = $BillsController->makebill(1);
//                debug($currentBill[0]['id']);
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('Usuario creado exitosamente'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
		$rols = $this->User->Rol->find('list');
		$this->set(compact('rols'));
	}
        
        public function editperuser($id = null) {
                $AuditeventusersController = new AuditeventusersController;
                $AuditeventusersController->register(12, $id);
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
                    
                    $CurrentUser = $this->User->findById($id);
                    $CurrentUser['User']['nit'] = $this->request->data['User']['nit'];
                    $CurrentUser['User']['password'] = $this->request->data['User']['password'];
                    $CurrentUser['User']['name'] = $this->request->data['User']['name'];
                    $CurrentUser['User']['email'] = $this->request->data['User']['email'];
			if ($this->User->save($CurrentUser)) {
				$this->Flash->success(__('Usuario Actualizado'));
				return $this->redirect(array('controller' => 'users','action' => 'viewperuser/'.$id));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
                $user = $this->User->findById($id);
                $this->set('user', $user);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('Usuario modificado!'));
				return $this->redirect(array('controller' => 'users', 'action' => 'view', $this->request->data['User']['id']));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$rols = $this->User->Rol->find('list');
		$this->set(compact('rols'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
