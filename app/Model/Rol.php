<?php
App::uses('AppModel', 'Model');
/**
 * Rol Model
 *
 * @property user $user
 */
class Rol extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'rol';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

//        var $actsAs = array('Acl' => array('requester'));
//
//        function parentNode() {
//            return null;
//        }
/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'id_rol',
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
