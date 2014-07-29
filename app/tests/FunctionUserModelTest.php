<?php
use Way\Tests\Factory;

class FunctionUserModelTest extends TestCase {

	public function testGetNameMethod()
	{
		$user = Factory::user(array('name' => 'Janez'));
		
		$this->assertEquals('Janez',$user->getName());
	}

	public function testSetNameMethod()
	{
		$user = Factory::user();
		$user->setName('Janez');
		$this->assertEquals('Janez',$user->getName());
	}

}