<?php
App::uses('AppModel', 'Model');
/**
 * Document Model
 *
 */
class Document extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'document';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id';
        
        public $hasMany = array(
                'Clientdocument' => array(
			'className' => 'Clientdocument',
			'foreignKey' => 'id_document',
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
