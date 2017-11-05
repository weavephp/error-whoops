<?php
declare(strict_types = 1);
/**
 * Weave Whoops Error Adaptor.
 */
namespace Weave\Error\Whoops;

/**
 * Weave Whoops Error Adaptor.
 */
trait Whoops
{
	/**
	 * Setup a global error handler.
	 *
	 * @param array  $config      Optional config array as provided from loadConfig().
	 * @param string $environment Optional indication of the runtime environment.
	 *
	 * @return null
	 */
	protected function loadErrorHandler(array $config = [], $environment = null)
	{
		$run = new \Whoops\Run;
		$run->pushHandler(new \Whoops\Handler\PrettyPageHandler);
		$run->register();
	}
}
