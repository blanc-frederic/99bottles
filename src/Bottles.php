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
            fn($index) => $this->verse($index),
            range($start, $end)
        ));
    }

    public function verse(int $index): string
    {
        switch ($index) {
            case 7:
                return "7 bottles of beer on the wall, " .
                "7 bottles of beer.\n" .
                "Take one down and pass it around, " .
                "1 six-pack of beer on the wall.\n";
                break;

            case 6:
                return "1 six-pack of beer on the wall, " .
                "1 six-pack of beer.\n" .
                "Take one down and pass it around, " .
                "5 bottles of beer on the wall.\n";
                break;

            case 2:
                return "2 bottles of beer on the wall, " .
                "2 bottles of beer.\n" .
                "Take one down and pass it around, " .
                "1 bottle of beer on the wall.\n";
                break;

            case 1:
                return "1 bottle of beer on the wall, " .
                "1 bottle of beer.\n" .
                "Take it down and pass it around, " .
                "no more bottles of beer on the wall.\n";
                break;

            case 0:
                return "No more bottles of beer on the wall, " .
                "no more bottles of beer.\n" .
                "Go to the store and buy some more, " .
                "99 bottles of beer on the wall.\n";
                break;

            default:
                return $index . " bottles of beer on the wall, " .
                $index . " bottles of beer.\n" .
                "Take one down and pass it around, " .
                ($index - 1) . " bottles of beer on the wall.\n";
                break;
        }
    }
}
