<?php
/* Page Test cases generated on: 2011-11-26 16:58:48 : 1322341128*/
App::uses('Page', 'Model');

/**
 * Page Test Case
 *
 */
class PageTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.page', 'app.user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Page = ClassRegistry::init('Page');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Page);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
