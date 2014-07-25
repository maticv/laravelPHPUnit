<?php
use Way\Tests\Factory;

class ValidationUserModelTest extends TestCase {
	
	public function testValidNewUser()
	{
		$user = Factory::user(array('email' => 'matic.volk@gmail.com', 'password' => '1234'));
		$user->email = 'matic.volk@gmail.com';
		$user->password = '1234';
		$this->assertTrue($user->validate());	
	}

	public function testInvalidWithoutEmail()
	{
		$user = Factory::user(array('email' => null));
		$this->assertFalse($user->validate());
	}

	public function testInvalidWithoutUniqueEmail()
	{
		$user = Factory::user(array('email' => 'matic.volk@gmail.com'));
		$user->save();

		$user = Factory::user(array('email' => 'matic.volk@gmail.com'));
		//$this->assertFalse($user->validate());		
	}
}