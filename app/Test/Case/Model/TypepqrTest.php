<?php
App::uses('Typepqr', 'Model');

/**
 * Typepqr Test Case
 */
class TypepqrTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.typepqr'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Typepqr = ClassRegistry::init('Typepqr');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Typepqr);

		parent::tearDown();
	}

}
