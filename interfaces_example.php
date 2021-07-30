<?php
interface TestInterface
{
	public function test(ArrayIterator $obj) : array;
	public function test2(array $a, string $s) : string;
}
abstract class Test implements TestInterface
{
	public string $test = 'TEST';
	public function getTest()
	{
		return $this->test;
	}
}
class Child extends Test
{
	// the data type hint can be more generic than "ArrayIterator"
	// but not more specific
	// also, the interface forces this method to only accept a single argument
	public function test($obj) : array
	{
		return ['TEST'];
	}
	public function test2($a, $b) : string
	{
		return 'TEST';
	}
}

$test = new Child();

