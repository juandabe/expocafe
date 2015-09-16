<?php
App::uses('Statedocument', 'Model');

/**
 * Statedocument Test Case
 */
class StatedocumentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.statedocument'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Statedocument = ClassRegistry::init('Statedocument');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Statedocument);

		parent::tearDown();
	}

}
