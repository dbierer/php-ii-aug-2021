<?php
declare(strict_types=1);
class Test
{
	public string $name = '';
	protected $id = 0;
	public array $list = [];
	public function setId(int $id)
	{
		$this->id = $id;
	}
}
$test = new Test();
$test->name = 'Fred Flintstone';
$test->setId('999');
$test->list = ['A','B','C'];
$test->name = 12345;

var_dump($test);

