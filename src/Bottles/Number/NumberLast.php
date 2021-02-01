<?php

declare(strict_types=1);

namespace App\Bottles\Number;

class NumberLast extends Number
{
    public function __toString(): string
    {
        return '1 bottle';
    }

    public function action(): string
    {
        return "Take it down and pass it around, ";
    }
}
