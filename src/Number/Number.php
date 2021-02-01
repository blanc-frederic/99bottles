<?php

declare(strict_types=1);

namespace App\Number;

class Number
{
    private int $number;

    public static function create(int $number)
    {
        switch ($number) {
            case 0:
                return new NumberNone(0);
            case 1:
                return new NumberLast(1);
            case 6:
                return new NumberPack(6);
            default:
                return new self($number);
        }
    }

    protected function __construct(int $number)
    {
        $this->number = $number;
    }

    public function __toString(): string
    {
        return $this->number . ' bottles';
    }

    public function next(): Number
    {
        return self::create($this->number - 1);
    }

    public function action(): string
    {
        return "Take one down and pass it around, ";
    }
}
