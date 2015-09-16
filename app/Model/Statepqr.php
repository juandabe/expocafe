<?php
App::uses('AppModel', 'Model');
/**
 * Statepqr Model
 *
 */
class Statepqr extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'statepqr';

        public $primaryKey = 'id';
        
        public $hasMany = array(
		'Pqrs' => array(
			'className' => 'Pqrs',
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
		)
	);

}
