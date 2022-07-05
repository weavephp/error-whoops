<?php

declare(strict_types = 1);

/**
 * Weave Whoops Error handler.
 */
namespace Weave\Error\Whoops;

use PHPUnit\Framework\TestCase;

class WhoopsTest extends TestCase
{
	/**
	 * Test calling the loadErrorHandler method calls the loadWhoopsErrorHandler method.
	 *
	 * @return null
	 */
	public function testLoadErrorHandler()
	{
		$instance = $this->getMockBuilder(WhoopsTestClass::class)
		->setMethods(['loadWhoopsErrorHandler'])
		->getMock();

		$instance->expects($this->once())->method('loadWhoopsErrorHandler');
		$instance->loadErrorHandler();
	}

	/**
	 * Test calling loadWhoopsErrorHandler returns a Whoops instance.
	 *
	 * @return null
	 */
	public function testLoadWhoopsErrorHandler()
	{
		$instance = new WhoopsTestClass();

		$whoopsInstance = $instance->loadWhoopsErrorHandler();

		$this->assertInstanceOf(\Whoops\Run::class, $whoopsInstance);
	}
}
