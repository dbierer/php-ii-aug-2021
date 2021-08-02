<?php
declare(strict_types=1);
namespace App\Strict;
class ExtendsStrict extends BaseStrict
{
    protected $status = 0;
    public function setStatus(int $status)
    {
        $this->status = $status;
    }
}
