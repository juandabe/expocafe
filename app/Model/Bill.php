<?php
App::uses('AppModel', 'Model');
/**
 * Bill Model
 *
 */
class Bill extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'bill';
        
        public $hasMany = array(
		'Billdetailitem' => array(
			'className' => 'Billdetailitem',
			'foreignKey' => 'id_bill',
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
