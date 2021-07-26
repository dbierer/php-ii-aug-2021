<?php
namespace Application;
use ArrayObject;
class Test
{
	public $obj = NULL;
	public function __construct(ArrayObject $obj)
	{
		$this->obj = $obj;
	}
}

$test = new Test(new ArrayObject());
