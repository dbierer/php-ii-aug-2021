<?php
define('BASE_DIR', __DIR__);
// standard php func
function func($class) 
{
	$fn = BASE_DIR 
		. '/' 
		. str_replace('\\', '/', $class) 
		. '.php';
	require $fn;
}
// anon func
$func = function($class) {
	$fn = BASE_DIR 
		. '/' 
		. str_replace('\\', '/', $class) 
		. '.php';
	require $fn;
};
// class that defines __invoke()
$anon = new class () {
	// example of a class-map algorithm
	public function __invoke($class) 
	{
		$class_map = [
			'Test\Entity\User' => __DIR__ . '/Test/Entity/User.php',
			'Test\Service\DoNothing' => __DIR__ . 'Test/Service/DoNothing.php',
		];
		if (isset($class_map[$class])) require $class_map[$class];
	}
};

spl_autoload_register('func');
spl_autoload_register($func);
spl_autoload_register($anon);

use Test\Entity\User;
use Test\Service\DoNothing;

$user[] = new User('Fred', 'Flintstone');
$user[] = new User('Wilma', 'Flintstone');
$nothing = new DoNothing($user[0]);
echo $nothing->getFullName();
// this is not allowed: it's marked "Protected"
//$user->firstName = 'Betty';
// Fatal Error: cannot use $this outside of class context
// echo $this->firstName;
var_dump($user);
