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
$str  = serialize($test);
$json = json_encode($test);

echo $str;
echo PHP_EOL;
echo $json;
echo PHP_EOL;

$obj1 = unserialize($str);
$obj2 = json_decode($json);

var_dump($obj1, $obj2);

echo $obj1->getFullName();
