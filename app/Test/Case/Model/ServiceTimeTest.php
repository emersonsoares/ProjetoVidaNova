<?php
/* ServiceTime Test cases generated on: 2007-04-26 02:15:44 : 1177568144*/
App::uses('ServiceTime', 'Model');

/**
 * ServiceTime Test Case
 *
 */
class ServiceTimeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.service_time');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ServiceTime = ClassRegistry::init('ServiceTime');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ServiceTime);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
