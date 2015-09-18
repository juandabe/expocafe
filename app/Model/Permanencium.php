<?php
App::uses('AppModel', 'Model');
/**
 * Permanencium Model
 *
 */
class Permanencium extends AppModel {
    
    public $useTable = 'permanencia';
    
    public $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'id_exportador',
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
