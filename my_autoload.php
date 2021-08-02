<?php
spl_autoload_register(function ($class) {
    $fn = str_replace('\\', '/', $class);
    require_once __DIR__ . '/src/' . $fn . '.php';
});

