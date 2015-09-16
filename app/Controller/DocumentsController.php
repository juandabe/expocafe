<?php
App::uses('AppController', 'Controller');
App::uses('AuditeventusersController', 'Controller');
/**
 * Documents Controller
 *
 * @property Document $Document
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class DocumentsController extends AppController {

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
		$this->Document->recursive = 0;
		$this->set('documents', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Document->exists($id)) {
			throw new NotFoundException(__('Invalid document'));
		}
		$options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
		$this->set('document', $this->Document->find('first', $options));
	}
        
        public function actives() {
            $AuditeventusersController = new AuditeventusersController;
            $AuditeventusersController->register(9, 1);
            $this->set('documents', $this->Document->find('all',array(
                        'conditions' => array('Document.active' => '1')
                    )),
                    $this->Paginator->paginate());
        }
        
        public function download($id) {
                $data = $this->Document->findById($id);
                if (empty($data)) {
                        throw new NotFoundException();
                }
                $this->response->file(
                        $data['Document']['document_path_adjunt'],
                        array(
                                'download' => true
                        )
                );
                return $this->response;
         }

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
                        $file = $this->request->data['document']['document_path_adjunt'];
                        $pathDocument=WWW_ROOT . 'data\documents' . DS.$file['name'];
                        move_uploaded_file($file['tmp_name'], $pathDocument);
                        $this->Document->create();
                        $this->Document->set('document_path_adjunt',$pathDocument);
                        $this->Document->set('name',$this->request->data['document']['name']);
                        $this->Document->set('active',$this->request->data['document']['active']);
                        $this->Document->set('type',$this->request->data['document']['type']);
			if ($this->Document->save($this->request->data)) {
                            $AuditeventusersController = new AuditeventusersController;
                            $AuditeventusersController->register(10, 1);
				$this->Flash->success(__('Documento creado exitosamente!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The document could not be saved. Please, try again.'));
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
		if (!$this->Document->exists($id)) {
			throw new NotFoundException(__('Invalid document'));
		}
		if ($this->request->is(array('post', 'put'))) {
                    $document = $this->Document->findById($id);
                    $file = $this->request->data['Document']['document_path_adjunt'];
                    if(!empty($file['tmp_name'])) {
                        unlink($document['Document']['document_path_adjunt']);
                        $pathDocument=WWW_ROOT . 'data\documents' . DS.$file['name'];
                        move_uploaded_file($file['tmp_name'], $pathDocument);
                        $document['Document']['document_path_adjunt'] = $pathDocument;
                    }
                    $document['Document']['name']=$this->request->data['Document']['name'];
                    $document['Document']['active']=$this->request->data['Document']['active'];
                    $document['Document']['type']=$this->request->data['Document']['type'];
                    $document['Document']['date']=date("Y/m/d");
                    if ($this->Document->save($document)) {
                        $this->Flash->success(__('Documento actualizado con exito!'));
			return $this->redirect(array('action' => 'index'));
                    } else {
                        $this->Flash->error(__('The document could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
			$this->request->data = $this->Document->find('first', $options);
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
		$this->Document->id = $id;
		if (!$this->Document->exists()) {
			throw new NotFoundException(__('Invalid document'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Document->delete()) {
			$this->Flash->success(__('The document has been deleted.'));
		} else {
			$this->Flash->error(__('The document could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
