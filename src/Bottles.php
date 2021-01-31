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
        return ucfirst($this->indexToText($index)) . " of beer on the wall, " .
        $this->indexToText($index) . " of beer.\n" .
        $this->action($index) .
        $this->indexToText($this->nextIndex($index)) . " of beer on the wall.\n";
    }

    private function indexToText(int $index): string
    {
        switch ($index) {
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
                return $index . ' bottles';
                break;
        }
    }

    private function action(int $index): string
    {
        if ($index === 1) {
            return "Take it down and pass it around, ";
        }

        if ($index === 0) {
            return "Go to the store and buy some more, ";
        }

        return "Take one down and pass it around, ";
    }

    private function nextIndex(int $index): int
    {
        if ($index === 0) {
            return 99;
        }

        return $index - 1;
    }
}
