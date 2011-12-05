<?php
/* Calendar Test cases generated on: 2011-11-27 15:20:37 : 1322421637*/
App::uses('Calendar', 'Model');

/**
 * Calendar Test Case
 *
 */
class CalendarTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.calendar');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Calendar = ClassRegistry::init('Calendar');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Calendar);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
