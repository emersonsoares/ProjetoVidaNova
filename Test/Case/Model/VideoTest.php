<?php
/* Video Test cases generated on: 2011-11-27 12:18:51 : 1322410731*/
App::uses('Video', 'Model');

/**
 * Video Test Case
 *
 */
class VideoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.video');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Video = ClassRegistry::init('Video');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Video);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
