<?php

declare(strict_types=1);

namespace App\Tests;

use App\CountdownVerse;

class FakeVerse implements CountdownVerse
{
    public function lyrics(int $index): string
    {
        return "This is verse {$index}.\n";
    }
}
