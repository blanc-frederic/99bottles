<?php

declare(strict_types=1);

namespace App\Bottles;

use App\CountdownVerse;

class BottlesLyrics implements CountdownVerse
{
    public function lyrics(int $index): string
    {
        return (string) new BottlesVerse($index);
    }
}
