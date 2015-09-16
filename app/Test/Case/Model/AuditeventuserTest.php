<?php
App::uses('Auditeventuser', 'Model');

/**
 * Auditeventuser Test Case
 */
class AuditeventuserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.auditeventuser'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Auditeventuser = ClassRegistry::init('Auditeventuser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Auditeventuser);

		parent::tearDown();
	}

}
