<?php

declare(strict_types=1);

namespace App\Bottles;

use App\Bottles\Number\Number;

class BottleVerse
{
    private Number $number;

    public function __construct(int $index)
    {
        $this->number = Number::create($index);
    }

    public function __toString(): string
    {
        return ucfirst($this->number . " of beer on the wall, ") .
        $this->number . " of beer.\n" .
        $this->number->action() .
        $this->number->next() . " of beer on the wall.\n";
    }
}
