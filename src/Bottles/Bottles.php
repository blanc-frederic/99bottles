<?php

declare(strict_types=1);

namespace App\Bottles;

use App\CountdownSong;

class Bottles extends CountdownSong
{
    public function __construct()
    {
        parent::__construct(new BottlesLyrics(), 99);
    }
}
