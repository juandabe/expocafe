<?php
App::uses('AppController', 'Controller');
App::uses('AuditeventusersController', 'Controller');
/**
 * Clientdocuments Controller
 *
 * @property Clientdocument $Clientdocument
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ClientdocumentsController extends AppController {

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
	public function index($id) {
		$this->Clientdocument->recursive = 0;
		$this->set('clientdocuments',$this->Clientdocument->find('all',
                        array('conditions'=> array('client'=>$id))),
                        $this->Paginator->paginate());
	}
        
        public function myupdates (){
                $AuditeventusersController = new AuditeventusersController;
                $AuditeventusersController->register(8, 1);
                $this->set('clientdocuments', $this->Clientdocument->find('all',array(
                            'conditions' => array('Clientdocument.client' => '2')
                        )),
                        $this->Paginator->paginate());
        }
        
        public function viewdocument($id) {
            if (!$this->Clientdocument->exists($id)) {
			throw new NotFoundException(__('Invalid clientdocument'));
		}
                $AuditeventusersController = new AuditeventusersController;
                $AuditeventusersController->register(15, 1);
		$options = array('conditions' => array('Clientdocument.' . $this->Clientdocument->primaryKey => $id));
		$this->set('clientdocument', $this->Clientdocument->find('first', $options));
        }
        
        public function alldocuments() {
                $this->set('clientdocuments', $this->Clientdocument->find('all',array(
                            'group' => 'Clientdocument.client'
                        )),
                        $this->Paginator->paginate());
        }
        
        public function check($id) {
            if (!$this->Clientdocument->exists($id)) {
			throw new NotFoundException(__('Invalid clientdocument'));
            }
            if ($this->request->is('post')) {
                $cliendocumentold = $this->Clientdocument->findById($id);
                $cliendocumentold['Clientdocument']['state'] = $this->request->data['Clientdocument']['state'];
                $cliendocumentold['Clientdocument']['observation'] = $this->request->data['Clientdocument']['observation'];
                if ($this->Clientdocument->save($cliendocumentold)) {
                        $this->Flash->success(__('Documento verficado Exitosamente!'));
                        return $this->redirect(array('action' => 'index/'.$cliendocumentold['Clientdocument']['client']));
                
                }
            }
            $clientdocument = $this->Clientdocument->findById($id);
            $this->set('clientdocument', $clientdocument);
            
        }
        
        public function download($id) {
                $data = $this->Clientdocument->findById($id);
                if (empty($data)) {
                        throw new NotFoundException();
                }
                $this->response->file(
                        $data['Clientdocument']['document_path_adjunt'],
                        array(
                                'download' => true
                        )
                );
                return $this->response;
         }

	public function add() {
            if ($this->request->is('post')) {
                $this->Clientdocument->create();
                $file = $this->request->data['Clientdocument']['document_path_adjunt'];
                $this->request->data['Clientdocument']['client']=2;
                $pathFile=WWW_ROOT . 'data\documents\clients'.DS.$this->request->data['Clientdocument']['client'];
                if (!is_dir($pathFile)) {
                    mkdir($pathFile, 0777, true);
                }
                $pathDocument=$pathFile.DS.$file['name'];
                move_uploaded_file($file['tmp_name'], $pathDocument);
                $this->request->data['Clientdocument']['document_path_adjunt']=$pathDocument;
                $this->request->data['Clientdocument']['state']=1;
                $this->request->data['Clientdocument']['date']=date("Y/m/d h:i:sa");
                if ($this->Clientdocument->save($this->request->data)) {
                        $this->Flash->success(__('Documento actualizado Exitosamente!'));
                        return $this->redirect(array('action' => 'myupdates'));
                } else {
                        $this->Flash->error(__('The clientdocument could not be saved. Please, try again.'));
                }
            }
            $users = $this->Clientdocument->User->find('list');
            $documents = $this->Clientdocument->Document->find('list');
            $statedocuments = $this->Clientdocument->Statedocument->find('list');
            $this->set(compact('users', 'documents'));
	}
        
        public function edit($id = null) {
                if (!$this->Clientdocument->exists($id)) {
                            throw new NotFoundException(__('Invalid clientdocument'));
                }
		if ($this->request->is(array('post', 'put'))) {
                    $clientdocument = $this->Clientdocument->findById($id);
                    $clientdocument['Clientdocument']['id_document']=$this->request->data['Clientdocument']['id_document'];
                    $clientdocument['Clientdocument']['state']=1;
                    $file = $this->request->data['Clientdocument']['document_path_adjunt'];
                    unlink($clientdocument['Clientdocument']['document_path_adjunt']);
                    $pathFile=WWW_ROOT . 'data\documents\clients'.DS.$clientdocument['Clientdocument']['client'];
                    $pathFile=$pathFile.DS.$file['name'];
                    move_uploaded_file($file['tmp_name'], $pathFile);
                    $clientdocument['Clientdocument']['document_path_adjunt'] = $pathFile;
                if ($this->Clientdocument->save($clientdocument)) {
                    $this->Flash->success(__('Documento actualizado con exito!'));
                    return $this->redirect(array('action' => 'viewdocument/'.$id));
                } else {
                    $this->Flash->error(__('The document could not be saved. Please, try again.'));
                    }
		} else {
			$options = array('conditions' => array('Clientdocument.' . $this->Clientdocument->primaryKey => $id));
			$this->request->data = $this->Clientdocument->find('first', $options);
		}
                $documents = $this->Clientdocument->Document->find('list');
                $this->set(compact('documents'));
	}


	public function delete($id = null) {
		$this->Clientdocument->id = $id;
		if (!$this->Clientdocument->exists()) {
			throw new NotFoundException(__('Invalid clientdocument'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Clientdocument->delete()) {
			$this->Flash->success(__('Documento eliminado correctamente!'));
		} else {
			$this->Flash->error(__('The clientdocument could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'myupdates'));
	}
}
