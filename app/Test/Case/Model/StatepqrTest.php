<?php
App::uses('Statepqr', 'Model');

/**
 * Statepqr Test Case
 */
class StatepqrTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.statepqr'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Statepqr = ClassRegistry::init('Statepqr');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Statepqr);

		parent::tearDown();
	}

}
