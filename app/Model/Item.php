<?php
App::uses('AppModel', 'Model');
/**
 * Item Model
 *
 */
class Item extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'item';
        
        public $hasMany = array(
		'Billdetailitem' => array(
			'className' => 'Billdetailitem',
			'foreignKey' => 'id_item',
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
