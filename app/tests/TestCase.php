<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase {


	public function setUp()
	{
		parent::setUp();
		Artisan::call('migrate');
	}
	/**
	 * Creates the application.
	 *
	 * @return \Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		$unitTesting = true;

		$testEnvironment = 'testing';

		return require __DIR__.'/../../bootstrap/start.php';
	}

	public function __call($method, $args)
	{
		if (in_array($method, ['get', 'post', 'put', 'patch', 'delete']))
		{
			return $this->call($method, $args[0]);
		}
	
		throw new BadMethodCallException;
	}

	public function tearDown()
	{
		Artisan::call('migrate:rollback');
	}
}
