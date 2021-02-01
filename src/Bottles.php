<?php

declare(strict_types=1);

namespace App;

class Bottles
{
    public function song(): string
    {
        return $this->verses(99, 0);
    }

    public function verses(int $start, int $end): string
    {
        return implode("\n", array_map(
            fn ($index) => $this->verse($index),
            range($start, $end)
        ));
    }

    public function verse(int $index): string
    {
        return ucfirst($this->numberToText($index)) . " of beer on the wall, " .
        $this->numberToText($index) . " of beer.\n" .
        $this->action($index) .
        $this->numberToText($this->nextNumber($index)) . " of beer on the wall.\n";
    }

    private function numberToText(int $number): string
    {
        switch ($number) {
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
                return $number . ' bottles';
                break;
        }
    }

    private function action(int $number): string
    {
        if ($number === 1) {
            return "Take it down and pass it around, ";
        }

        if ($number === 0) {
            return "Go to the store and buy some more, ";
        }

        return "Take one down and pass it around, ";
    }

    private function nextNumber(int $number): int
    {
        if ($number === 0) {
            return 99;
        }

        return $number - 1;
    }
}
