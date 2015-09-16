<?php
App::uses('AppModel', 'Model');
/**
 * Clientdocument Model
 *
 */
class Clientdocument extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'clientdocument';
        
        
        /**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id';
        
        public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'client',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'id_document',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Statedocument' => array(
			'className' => 'Statedocument',
			'foreignKey' => 'state',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
            
	);

}
