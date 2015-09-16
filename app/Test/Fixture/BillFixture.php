<?php
/**
 * Bill Fixture
 */
class BillFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'bill';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'total_bill' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'client' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'date_registration' => array('type' => 'date', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'BILL_fk0' => array('column' => 'client', 'unique' => 0)
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
			'total_bill' => 1,
			'client' => 1,
			'date_registration' => '2015-09-09'
		),
	);

}
