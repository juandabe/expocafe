<?php
/**
 * Billdetailitem Fixture
 */
class BilldetailitemFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'billdetailitem';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'id_bill' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'id_item' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'date_registration' => array('type' => 'date', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'BILL_DETAILS_fk0' => array('column' => 'id_item', 'unique' => 0),
			'BILL_DETAILS_fk1' => array('column' => 'id_bill', 'unique' => 0)
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
			'id_bill' => 1,
			'id_item' => 1,
			'date_registration' => '2015-09-09'
		),
	);

}
