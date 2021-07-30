<?php
class Test
{
	public function doIt(callable $callback, array $params)
	{
		return $callback($params);
	}
}

$add = function (array $args) {
	return array_sum($args);
};
function lower(array $args) {
	foreach ($args as $key => $value)
		$args[$key] = strtolower($value);
	return $args;
}
$sub = new class() {
	public function __invoke(array $args)
	{
		$first = array_shift($args);
		while (count($args) > 0) {
			$next = array_shift($args);
			$first -= $next;
		}
	}
};
$test = new Test();
var_dump($test->doIt($add, [2,2]));
var_dump($test->doIt('lower', ['A','B','C']));
var_dump($test->doIt($sub, [10,2,2]));
