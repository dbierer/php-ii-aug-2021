<?php
class Test
{
	public string $fname = 'Fred';
	public string $lname = 'Flintstone';
	public function getInstance() : self
	{
		return new self();
	}
}
class Child extends Test
{
	public string $token;
	public function getInstance() : static
	{
		$this->token = bin2hex(random_bytes(8));
		return new static();
	}
}

$test = new Child();
$new  = $test->getInstance();
var_dump($new);
