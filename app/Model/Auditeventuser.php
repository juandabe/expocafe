<?php
App::uses('AppModel', 'Model');
/**
 * Auditeventuser Model
 *
 */
class Auditeventuser extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'auditeventuser';
        
        public $belongsTo = array(
		'Auditevent' => array(
			'className' => 'Auditevent',
			'foreignKey' => 'id_event',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_event',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
