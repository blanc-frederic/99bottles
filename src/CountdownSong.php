<?php

declare(strict_types=1);

namespace App;

class CountdownSong
{
    protected int $max;
    protected int $min;
    protected CountdownVerse $verseTemplate;

    public function __construct(CountdownVerse $verseTemplate, int $max, int $min = 0)
    {
        $this->verseTemplate = $verseTemplate;
        $this->max = $max;
        $this->min = $min;
    }

    public function song(): string
    {
        return $this->verses($this->max, $this->min);
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
        return $this->verseTemplate->lyrics($index);
    }
}
