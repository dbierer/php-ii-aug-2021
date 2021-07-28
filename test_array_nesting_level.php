<?php
class TestNest
{
	public const TEST_TEXT = "Testing the nesting level for %s\n";
	public array $arr = [];
	public int   $count = 0;
	public function testMethodNest() : void
	{
		echo $this->count++ . ' ';
		$this->testMethodNest();
	}
	public function testArrayNest() : void
	{
		printf(self::TEST_TEXT, 'arrays');
		$count = 1;
		$arr[] = $count;
		while(0 !== 1) {
			echo $count . ' ';
			$this->arr = $this->doArrayNest($this->arr, $count++);
		}
	}
	public function doArrayNest(array $arr, int $count) : array
	{
		$str = serialize($arr);
		$str = 'a:1:{i:0;' . $str . '}';
		return unserialize($str);
	}
	public function serializeNestedArray() : string
	{
		$out = '';
		$a = [ 0 => 'A' ];
		$out .= serialize($a) . "\n";
		$a = [ 0 => [ 0 => 'A' ]];
		$out .= serialize($a) . "\n";
		$a = [ 0 => [ 0 => [ 0 => 'A' ]]];			
		$out .= serialize($a) . "\n";
		return $out;
	}
}
//ini_set('unserialize_max_depth', PHP_INT_MAX);
//ini_set('xdebug.max_nesting_level', PHP_INT_MAX);
$test = new TestNest();
try {
//	$test->testArrayNest();
	$test->testMethodNest();
} catch (Throwable $t) {
	echo $t->getMessage() . "\n";
}

