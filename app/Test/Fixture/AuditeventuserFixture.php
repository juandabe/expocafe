<?php
/**
 * Auditeventuser Fixture
 */
class AuditeventuserFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'auditeventuser';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'id_event' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'date_event' => array('type' => 'date', 'null' => false, 'default' => null),
		'user_event' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'AUDIT_EVENT_USER_fk0' => array('column' => 'user_event', 'unique' => 0),
			'AUDIT_EVENT_USER_fk1' => array('column' => 'id_event', 'unique' => 0)
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
			'id_event' => 1,
			'date_event' => '2015-09-09',
			'user_event' => 1
		),
	);

}
