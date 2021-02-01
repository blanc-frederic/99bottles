<?php

declare(strict_types=1);

namespace App;

use App\Number\Number;

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
        $number = Number::create($index);

        return ucfirst((string) $number) . " of beer on the wall, " .
        $number . " of beer.\n" .
        $number->action() .
        $number->next() . " of beer on the wall.\n";
    }
}
