<?php

declare(strict_types=1);

namespace App;

class Bottles
{
    public function verse(int $index): string
    {
        if ($index === 2) {
            return "2 bottles of beer on the wall, " .
            "2 bottles of beer.\n" .
            "Take one down and pass it around, " .
            "1 bottle of beer on the wall.\n";
        }

        return $index . " bottles of beer on the wall, " .
        $index . " bottles of beer.\n" .
        "Take one down and pass it around, " .
        ($index -1) . " bottles of beer on the wall.\n";
    }
}
