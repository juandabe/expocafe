<?php
/**
 * Permission Fixture
 */
class PermissionFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'permission';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'primary'),
		'client' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2, 'unsigned' => false, 'key' => 'index'),
		'id_item' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'date_start' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'date_end' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'PERMISSION_fk0' => array('column' => 'client', 'unique' => 0),
			'PERMISSION_fk1' => array('column' => 'id_item', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'client' => 1,
			'id_item' => 1,
			'date_start' => '2015-09-16 19:06:10',
			'date_end' => '2015-09-16 19:06:10'
		),
	);

}
