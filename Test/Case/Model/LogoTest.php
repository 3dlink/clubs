<?php
App::uses('Logo', 'Model');

/**
 * Logo Test Case
 *
 */
class LogoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.logo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Logo = ClassRegistry::init('Logo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Logo);

		parent::tearDown();
	}

}
