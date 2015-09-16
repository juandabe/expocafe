<?php
App::uses('Clientdocument', 'Model');

/**
 * Clientdocument Test Case
 */
class ClientdocumentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.clientdocument'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Clientdocument = ClassRegistry::init('Clientdocument');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Clientdocument);

		parent::tearDown();
	}

}
