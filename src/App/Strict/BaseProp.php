<?php
declare(strict_types=1);
namespace App\Strict;
abstract class BaseProp
{
    protected int $num = 0;
    public function setNum($num)
    {
        $this->num = $num;
    }
}
