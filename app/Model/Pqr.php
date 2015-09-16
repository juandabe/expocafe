<?php
App::uses('AppModel', 'Model');
/**
 * Pqr Model
 *
 */
class Pqr extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'pqr';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id';
        
        public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'id_client',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
                'Statepqr' => array(
                            'className' => 'Statepqr',
                            'foreignKey' => 'state',
                            'conditions' => '',
                            'fields' => '',
                            'order' => ''
                    ),
                'Typepqr' => array(
                                'className' => 'Typepqr',
                                'foreignKey' => 'type',
                                'conditions' => '',
                                'fields' => '',
                                'order' => ''
                        )
            
	);

}
