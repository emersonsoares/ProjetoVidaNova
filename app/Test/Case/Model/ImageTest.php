<?php
/* Image Test cases generated on: 2011-11-29 23:37:50 : 1322624270*/
App::uses('Image', 'Model');

/**
 * Image Test Case
 *
 */
class ImageTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.image', 'app.post');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Image = ClassRegistry::init('Image');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Image);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
