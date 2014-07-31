<?php

class PostsControllerTest extends TestCase {
	
	public function testIfLoginHasRules()
	{
		$this->call('GET', 'login');
		$this->assertViewHas('rules');	
	}

	public function testRedirectLogin()
	{
		$this->call('GET', 'login');
		$this->call('POST','login');
		$this->assertRedirectedTo('login');		
	}

}