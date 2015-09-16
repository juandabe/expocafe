<?php
App::uses('AppModel', 'Model');
/**
 * Statedocument Model
 *
 */
class Statedocument extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'statedocument';
        
        public $primaryKey = 'id';

        public $hasMany = array(
		'Clientdocument' => array(
			'className' => 'Clientdocument',
			'foreignKey' => 'state',
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
