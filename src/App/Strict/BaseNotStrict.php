<?php
namespace App\Strict;

abstract class BaseNotStrict
{
    protected $num = 0;
    public function setNum(int $num)
    {
        $this->num = $num;
    }
}
