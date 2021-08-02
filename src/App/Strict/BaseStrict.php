<?php
declare(strict_types=1);
namespace App\Strict;
abstract class BaseStrict
{
    protected $num = 0;
    public function setNum(int $num)
    {
        $this->num = $num;
    }
}
