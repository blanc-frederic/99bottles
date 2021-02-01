<?php

declare(strict_types=1);

namespace App;

class Number
{
    private int $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function __toString(): string
    {
        switch ($this->number) {
            case 6:
                return '1 six-pack';
                break;
            case 1:
                return '1 bottle';
                break;
            case 0:
                return 'no more bottles';
                break;
            default:
                return $this->number . ' bottles';
                break;
        }
    }

    public function next(): Number
    {
        if ($this->number === 0) {
            return new Number(99);
        }

        return new Number($this->number - 1);
    }

    public function action(): string
    {
        if ($this->number === 1) {
            return "Take it down and pass it around, ";
        }

        if ($this->number === 0) {
            return "Go to the store and buy some more, ";
        }

        return "Take one down and pass it around, ";
    }
}

