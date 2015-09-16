<?php
App::uses('AppModel', 'Model');
/**
 * Auditevent Model
 *
 */
class Auditevent extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'auditevent';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

        public $hasMany = array(
		'Auditeventuser' => array(
			'className' => 'Auditeventuser',
			'foreignKey' => 'id_event',
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
