<?php
App::uses('Billdetailitem', 'Model');

/**
 * Billdetailitem Test Case
 */
class BilldetailitemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.billdetailitem'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Billdetailitem = ClassRegistry::init('Billdetailitem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Billdetailitem);

		parent::tearDown();
	}

}
