<?php
/**
 * Weave Whoops Error handler test class.
 */
namespace Weave\Error\Whoops;

/**
 * Test class using the Whoops trait so we can unit test the trait.
 *
 * The methods are setup to return values used in the unit testing.
 */
class WhoopsTestClass
{
	use Whoops {
		loadErrorHandler as public;
		loadWhoopsErrorHandler as public;
	}
}
