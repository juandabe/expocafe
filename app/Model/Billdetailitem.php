<?php
App::uses('AppModel', 'Model');
/**
 * Billdetailitem Model
 *
 */
class Billdetailitem extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'billdetailitem';
        
        public $belongsTo = array(
		'Bill' => array(
			'className' => 'Bill',
			'foreignKey' => 'id_bill',
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
