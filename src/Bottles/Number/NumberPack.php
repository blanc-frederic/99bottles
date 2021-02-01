<?php

declare(strict_types=1);

namespace App\Bottles\Number;

class NumberPack extends Number
{
    public function __toString(): string
    {
        return '1 six-pack';
    }
}