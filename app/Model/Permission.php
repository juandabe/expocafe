<?php
App::uses('AppModel', 'Model');
/**
 * Permission Model
 *
 */
class Permission extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'permission';
        
        public $primaryKey = 'id';
        
        public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'client',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
                'Item' => array(
			'className' => 'Item',
			'foreignKey' => 'id_item',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
