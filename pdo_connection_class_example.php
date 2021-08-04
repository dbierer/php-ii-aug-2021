<?php
require __DIR__ . '/my_autoload.php';
use App\DB\Connection;
use App\DB\Service\Customer;

$config = [
	'dsn'  => 'mysql:dbname=phpcourse;host=localhost',
	'user' => 'vagrant',
	'pwd'  => 'vagrant'
];

$data = [
	'first' => 'Fred',
	'last'  => strtoupper(bin2hex(random_bytes(4))),
];
try {
	$customer = new Customer(new Connection($config));
	if ($customer->save($data)) {
		echo "Data added\n";
	} else {
		echo "Problem with save\n";
	}
	$list     = $customer->findAll();
	var_dump($list);
} catch (PDOException $p) {
	error_log($e->getMessage());
	echo $e->getMessage() . PHP_EOL;
} catch (Throwable $t) {
	error_log($t->getMessage());
	echo $t->getMessage() . PHP_EOL;
}


