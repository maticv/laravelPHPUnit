<?php

class PostsControllerTest extends TestCase {
	
	public function testIndex()
	{
		$this->call('GET', 'login');
		//$this->assertViewHas('rules');
		$this->call('POST','login');
		$this->assertRedirectedTo('login');
	}

}