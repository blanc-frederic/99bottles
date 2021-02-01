<?php

declare(strict_types=1);

namespace App\Number;

class NumberNone extends Number
{
    public function __toString(): string
    {
        return 'no more bottles';
    }

    public function next(): Number
    {
        return new Number(99);
    }

    public function action(): string
    {
        return "Go to the store and buy some more, ";
    }
}
