<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/api/get-pics/e3modmain');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

}
