<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
define('WORKS_OK', "Works OK\n");
include __DIR__ . '/my_autoload.php';
use App\Strict\ {ExtendsStrict, ExtendsNotStrict, ExtendsProp};

// Base class uses "declare(strict_types=1)"
try {
    $strict = new ExtendsStrict();
    $strict->setStatus(111);
    $strict->setNum('ABC');
    echo __LINE__ . ':' . WORKS_OK;
} catch (Throwable $t) {
    echo __LINE__ . ':' . $t->getMessage() . "\n";
}
var_dump($strict);

// Base class does NOT use "declare(strict_types=1)"
try {
    $strict = new ExtendsNotStrict();
    $strict->setStatus(111);
    $strict->setNum('ABC');
    echo __LINE__ . ':' . WORKS_OK;
} catch (Throwable $t) {
    echo __LINE__ . ':' . $t->getMessage() . "\n";
}
var_dump($strict);


// Base class does uses property data typing
try {
    $strict = new ExtendsProp();
    $strict->setStatus(111);
    $strict->setNum('999.99');
    echo __LINE__ . ':' . WORKS_OK;
} catch (Throwable $t) {
    echo __LINE__ . ':' . $t->getMessage() . "\n";
}
var_dump($strict);

// Both examples below work ... because they use a numeric string!
// Base class uses "declare(strict_types=1)"
try {
    $strict = new ExtendsStrict();
    $strict->setStatus(111);
    $strict->setNum('999.99');
    echo __LINE__ . ':' . WORKS_OK;
} catch (Throwable $t) {
    echo __LINE__ . ':' . $t->getMessage() . "\n";
}
var_dump($strict);

// Base class does NOT use "declare(strict_types=1)"
try {
    $strict = new ExtendsNotStrict();
    $strict->setStatus(111);
    $strict->setNum('999.99');
    echo __LINE__ . ':' . WORKS_OK;
} catch (Throwable $t) {
    echo __LINE__ . ':' . $t->getMessage() . "\n";
}
var_dump($strict);





