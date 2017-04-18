<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

	public function testSomethingIsTrue()
    {
    	$response = $this->call('GET', '/');
        $this->assertEquals('arrived', $response->getContent());
    }

    public function testAssertEquals()
    {
    	
        $this->assertEquals(1000, 99);
    }

    public function testAssertEquals2()
    {
    	
        $this->assertEquals(1000, 89);
    }
}


