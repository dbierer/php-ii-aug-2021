<?php
declare(strict_types=1);
class Test
{
	public function add(int|float|array $a, float $b = NULL) : float
	{
		if (is_array($a)) return array_sum($a);
		return $a + $b;
	}
	public function sub(float $a, float $b) : float
	{
		return $a + $b;;
	}
}
$test = new Test();
echo $test->add(11.11,22.22);
echo "\n";
echo $test->add([11.11,22.22,33.33]);
echo "\n";

