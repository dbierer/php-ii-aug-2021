<?php
class Test extends ArrayObject
{
	public function getFullName()
	{
		// when using ArrayObject, properties are private,
		// but accessible using "offsetGet()" and "offsetSet()"
		// these two methods are the "getter" and "setter" for ArrayObject
		return $this->offsetGet('firstName') 
			   . ' ' 
			   . $this->offsetGet('lastName');
	}
	public function __toString()
	{
		return json_encode($this->getArrayCopy());
	}
	public function __get($var)
	{
		return NULL;
	}
	public function __call($method, $params)
	{
		error_log(__CLASS__ . ':unknown method call:' . $method);
		throw new Exception('This method: ' . $method . ' does not exist');
	}
}
$test = new Test(['firstName' => 'Fred', 'lastName' => 'Flintstone', 'id' => 999]);

var_dump(get_object_vars($test));
var_dump($test->getArrayCopy());
echo $test->getFullName();
echo "\n";
echo $test;
echo "\n";
echo $test->doesNotExist;
echo $test->methodNot();
