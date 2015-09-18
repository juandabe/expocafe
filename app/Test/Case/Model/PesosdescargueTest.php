<?php
App::uses('Pesosdescargue', 'Model');

/**
 * Pesosdescargue Test Case
 */
class PesosdescargueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pesosdescargue'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Pesosdescargue = ClassRegistry::init('Pesosdescargue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pesosdescargue);

		parent::tearDown();
	}

}
