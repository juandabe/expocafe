<?php
App::uses('Auditevent', 'Model');

/**
 * Auditevent Test Case
 */
class AuditeventTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.auditevent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Auditevent = ClassRegistry::init('Auditevent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Auditevent);

		parent::tearDown();
	}

}
