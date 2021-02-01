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
        }

        return new self($number);
    }

    protected function __construct(int $number)
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
            default:
                return $this->number . ' bottles';
                break;
        }
    }

    public function next(): Number
    {
        return self::create($this->number - 1);
    }

    public function action(): string
    {
        if ($this->number === 1) {
            return "Take it down and pass it around, ";
        }

        return "Take one down and pass it around, ";
    }
}

