<?php
App::uses('AppModel', 'Model');
/**
 * Typepqr Model
 *
 */
class Typepqr extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'typepqr';
        
        public $primaryKey = 'id';

        public $hasMany = array(
		'Pqrs' => array(
			'className' => 'Pqrs',
			'foreignKey' => 'type',
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
