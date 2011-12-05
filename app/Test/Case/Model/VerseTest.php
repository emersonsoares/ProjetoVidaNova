<?php
/* Verse Test cases generated on: 2011-11-26 22:27:31 : 1322360851*/
App::uses('Verse', 'Model');

/**
 * Verse Test Case
 *
 */
class VerseTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.verse');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Verse = ClassRegistry::init('Verse');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Verse);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
