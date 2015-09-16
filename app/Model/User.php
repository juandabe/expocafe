<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 * @property rol $rol
 */
class User extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'user';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

//        var $actsAs = array('Acl' => array('requester'));
//        
//        function bindNode($user) {
//            return array('model' => 'Rol', 'foreign_key' => $user['User']['id_rol']);
//        }
//
//        function parentNode() {
//            if (!$this->id && empty($this->data)) {
//                return null;
//            }
//            $data = $this->data;
//            if (empty($this->data)) {
//                $data = $this->read();
//            }
//            if (!$data['User']['id_rol']) {
//                return null;
//            } else {
//                return array('Rol' => array('id' => $data['User']['id_rol']));
//            }
//        }
        
        public function beforeSave($options = array()) {
            if (isset($this->data[$this->alias]['password'])) {
                $passwordHasher = new BlowfishPasswordHasher();
                $this->data[$this->alias]['password'] = $passwordHasher->hash(
                    $this->data[$this->alias]['password']
                );
            }
            return true;
        }
/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Rol' => array(
			'className' => 'Rol',
			'foreignKey' => 'id_rol',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        public $hasMany = array(
		'Pqr' => array(
			'className' => 'Pqr',
			'foreignKey' => 'id_client',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
                'Clientdocument' => array(
			'className' => 'Clientdocument',
			'foreignKey' => 'client',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
                'Bill' => array(
			'className' => 'Bill',
			'foreignKey' => 'client',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
                'Auditeventuser' => array(
			'className' => 'Auditeventuser',
			'foreignKey' => 'user_event',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		));
}
