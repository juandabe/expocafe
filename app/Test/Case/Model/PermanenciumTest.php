<?php
App::uses('Permanencium', 'Model');

/**
 * Permanencium Test Case
 */
class PermanenciumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.permanencium'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Permanencium = ClassRegistry::init('Permanencium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Permanencium);

		parent::tearDown();
	}

}
