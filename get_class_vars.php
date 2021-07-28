<?php
class Test
{
	public function __construct(
		public string $name = 'Fred Flinstone',
		public string $role = 'Caveman',
		private int $id = 999 )
	{}
	public function getArrayCopy()
	{
		return get_object_vars($this);
	}
}
$test[] = new Test();
$test[] = new Test('Wilma Flintstone', 'Cavewoman', 888);

var_dump(get_object_vars($test[0]));
var_dump($test[0]->getArrayCopy());


