<?php
class Foo {
    public function __construct(protected string $param){}
    public function doSomething($param): static {
       return new static($param);
 
    }
}
 
class Bar extends Foo {
}
 
$foo = new Foo('foo');
$bar = new Bar('bar');
$newbar = $bar->doSomething('jump');
$newfoo = $foo->doSomething('how high'); 
var_dump($newbar, $newfoo);
